@extends('layout.web')
@section('title', $destination->name)
@section('navBarStyle', 'light')
@section('head')
  @parent
@endsection
@section('content')
  <!-- /header -->
  <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <div class="post-category text-line">
                <a href="#" class="hover" rel="category">Teamwork</a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-4">Commodo Dolor Bibendum Parturient Cursus Mollis</h1>
              <ul class="post-meta mb-5">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2022</span></li>
                <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Comments</span></a></li>
                <li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i>3<span> Likes</span></a></li>
              </ul>
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
@endsection
@section('scripts')
@endsection