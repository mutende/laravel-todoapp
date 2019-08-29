@extends('layouts.app')
@section('title','Home')

@section('landing')

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top:-25px;">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('img/img1.jpg') }}" alt="First slide" height="585" width="100%">
                                <div class="carousel-caption d-none d-md-block mt-auto mb-auto">
                                        <h1 class="text-primary"><Strong>Welcome to ToDoApp</strong></h1>
                                        <h3 class="text-primary">Create and Manage your tasks with ease</h3>
                                      </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('img/img2.jpg') }}" alt="Second slide" height="585" width="100%">
                                <div class="carousel-caption d-none d-md-block mt-auto mb-auto">
                                        <h1 class="text-primary"><Strong>Simple steps to get started with ToDoApp</strong></h1>
                                        <h3 class="text-primary">Just Signup and you're ready to go :)</h3>
                                      </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('img/img3.jpg') }}" alt="Third slide" height="585" width="100%">
                                <div class="carousel-caption d-none d-md-block mt-auto mb-auto">
                                        <h1 class="text-primary"><Strong>Are you experinecing any problems with ToDoApp?</strong></h1>
                                            <h3 class="text-primary"><span><i class="fa fa-phone text-warning mr-2" aria-hidden="true"></i>+25471796059</span><br> or <br><span><i class="fa fa-envelope-o text-warning mr-2" aria-hidden="true"></i>elvismutende@gmail.com</span></h3>
                                          </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
@endsection
