<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $post = Post::all();

        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

//        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $post = Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'user_id' => auth()->user()->id
        ]);

        Notification::route('telegram', '5560228011')->notify(new \App\Notifications\NewBlogNotification($post));

        return redirect('/blog')->with('message', 'Your Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $slug)
    {
        Post::where('slug', $slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Your Post has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->delete();

        return redirect('/blog')->with('message', 'Your Post has been Deleted');
    }

    //like and unlike feature
    public function likePost($id)
    {
        $post = Post::find($id);
        $post->like();
        $post->save();

        return redirect('/blog');
    }

    public function unlikePost($id)
    {
        $post = Post::find($id);
        $post->unlike();
        $post->save();

        return redirect('/blog');
    }
}
