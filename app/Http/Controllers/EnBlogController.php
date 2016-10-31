<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Posts;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

use SEOMeta;
use OpenGraph;
use Twitter;
use SEO;
use Illuminate\Http\Request;

class EnBlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		SEO::setTitle('Tealinux OS - The Joy of Blend ');
		SEO::setDescription('TeaLinuxOS is an operating system based on Ubuntu created for programming
purpose. Everything inside such as application, interface and configuration are
designed for developer activity. The main purpose to make learning
programming escpecially in education world easy.
TeaLinux, developed together by Dinus Open Source Community with tagline
"the joy of blend".');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');
		//SEO::opengraph()->setUrl('http://current.url.com');
		//SEO::setCanonical('https://codecasts.com.br/lesson');
		//SEO::opengraph()->addProperty('type', 'articles');
		SEO::twitter()->setSite('@doscomedia');

		return view('en.blog.index');
	}

	public function wiki(){


		SEO::setTitle('Tealinux OS - Wiki');
		SEO::setDescription('Temukan solusi perihal penggunaan TeaLinux OS pada halaman Wiki Tealinux OS');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		//SEO::opengraph()->setUrl('http://current.url.com');
		//SEO::setCanonical('https://codecasts.com.br/lesson');
		//SEO::opengraph()->addProperty('type', 'articles');
		SEO::twitter()->setSite('@doscomedia');
		return view('en.blog.wiki');
	}
	public function kontribusi(){


		SEO::setTitle('Tealinux OS - Yuk Kontribusi');
		SEO::setDescription('Karena berkontribusi gak akan rugi :D');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');


		return view('en.blog.kontribusi');
	}
	public function dukungan(){

		SEO::setTitle('Dokumentasi Instalasi dan Penggunaan TealinuxOS 8');
		SEO::setDescription('Panduan ini bersisi langkah-langkah instalasi dan dasar-dasar penggunaan TeaLinuxOS 8 - Peppermint');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');

		return view('en.blog.dukungan');
	}
	public function instalasi(){

		SEO::setTitle('Panduan Instalasi - Tealinux OS');
		SEO::setDescription('Panduan ringkas dan mudah instalasi Tealinux OS pada laptop atau PC Anda');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');

		return view('en.blog.instalasi');
	}
	public function panduan(){

		SEO::setTitle('Dokumentasi Pengguna TealinuxOS 8');
		SEO::setDescription('Panduan ini bersisi dasar-dasar penggunaan TeaLinuxOS 8 - Peppermint');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');


		return view('en.blog.panduan');
	}
	public function blog(){
		SEO::setTitle('Blog - Tealinux OS');
		SEO::setDescription('Dapatkan informasi terbaru seputar TeaLinux OS!');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');
		$posts = Posts::where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = 'Latest Posts';
		return view ('en.blog.blog')->withPosts($posts)->withTitle($title);
	}
	public function toko(){

		SEO::setTitle('Tealinux OS - Store ');
		SEO::setDescription('Dukung proyek Tealinux OS dan dapatkan merchendise khas TeaLinux OS');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');
		return view ('en.blog.toko');
	}

	public function detail(){

		SEO::setTitle('Tealinux OS - Detail Blog ');
		SEO::setDescription('Detail Blog Tealinux OS');
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');
		return view ('en.blog.detail');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Posts::where('slug',$slug)->first();

		SEO::setTitle($post->title . ' - Blog Tealinux OS');
		SEO::setDescription(substr($post->body, 0, 50));
		SEO::addImages('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s1600/tealinuxos2.png');

		SEO::twitter()->setSite('@doscomedia');


		if($post)
		{
			if($post->active == false)
				return redirect('/index')->withErrors('requested page not found');
			$comments = $post->comments;
		}
		else
		{
			return redirect('/index')->withErrors('requested page not found');
		}
		return view('en.blog.readmore')->withPost($post)->withComments($comments);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
