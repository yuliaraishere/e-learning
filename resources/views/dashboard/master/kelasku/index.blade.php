@extends('layouts.nav')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
  @endPushOnce
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <!-- Bookmark Start-->              
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">	
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>Kelas Pelatihan Saya</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/viho/dashboard">Kegiatanku</a></li>
              <li class="breadcrumb-item">Kelas Pelatihan</li>
		<li class="breadcrumb-item active">Daftar Kelas</li>
          </ol>
        </div>
        <div class="col-lg-6">
          <!-- Bookmark Start-->
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
</div>	
	<div class="container-fluid">
	    <div class="row learning-block">
	        <div class="col-xl-9 xl-100">
	            <div class="row">
	                <div class="col-xl-12 col-sm-6">
	                    <div class="card">
	                        <div class="blog-box blog-list row">
	                            <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w" src="{{asset('assets/images/faq/1.jpg')}}" /></div>
	                            <div class="col-xl-7 col-12">
	                                <div class="blog-details">
										<h1>HardSkill</h1>
	                                    <div class="blog-date"><span>01</span> November 2022</div>	                              
	                                    <div class="blog-date"><span>03</span> November 2022</div>
	                                	<h6>Sesi I</h6>
                                        <div class="progress position-relative">
    <div class="progress-bar-animated progress-bar-striped bg-warning" role="progressbar" style="width: 73%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
    <medium class="justify-content-center d-flex position-absolute w-100 ">73 / 100</medium>
    </div>
	                                    <div class="blog-bottom-content">
	                                        <ul class="blog-social">
	                                            <li>Pengajar : Agus Supriyono, S.S., M.A.P.</li>
	                                            <li>Bab I</li>												
	                                            <li>Jumlah JP : 3 JP</li>												
	                                        </ul>										
	                                        <hr />
										<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure consequatur perferendis sapiente! Ut, aliquam magni molestiae rem perferendis eius, similique, eos suscipit odit pariatur sunt eum corporis saepe qui repellendus!</p>												
									<hr />									  									
									<!-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test"
              						data-bs-target="#addKelas">Lanjutkan Kelas</button> -->
									<!-- <button class="btn btn-primary" type="button" onclick="successModal()"id="myButton">Selesaikan Kelas</button> -->
								
									<!-- <a href="pengajar.add"class="btn btn-primary text-center" type="button">Ajukan Kelas</a> -->									
                                    </div>
									
                                  </div>
								  
	                    </div>
						<div class="col-md-4">

										<a href="kelasku/hardskill"class="btn btn-primary text-center" type="button" target=_blankf>Lanjutkan Kelas</a>
										
									</div>
	                </div>
	                </div>					
	                <div class="col-xl-12 col-sm-6">
	                    <div class="card">
	                        <div class="blog-box blog-list row">
	                            <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w" src="{{asset('assets/images/faq/2.jpg')}}" alt="" /></div>
	                            <div class="col-xl-7 col-12">
	                                <div class="blog-details">
	                                    <div class="blog-date"><span>10</span> March 2019</div>
	                                    <a href="learning-detailed.html"> <h6>Web Development</h6></a>
	                                    <div class="blog-bottom-content">
	                                        <ul class="blog-social">
	                                            <li>by: Petey Cruiser</li>
	                                            <li>34 Hits</li>
	                                        </ul>
	                                        <hr />
	                                        <p class="mt-0">
	                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                            Nemo enim ipsam voluptatem quia voluptas sit.inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--<div class="col-xl-4 xl-50 col-sm-6 box-col-6">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="https://laravel.pixelstrap.com/viho/assets/images/faq/3.jpg" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6>Web Devlopment.</h6>
	                                    </div>
	                                </a>
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="https://laravel.pixelstrap.com/viho/assets/images/faq/1.jpg" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6>Web Design.</h6>
	                                    </div>
	                                </a>
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="https://laravel.pixelstrap.com/viho/assets/images/faq/4.jpg" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6>UX Development.</h6>
	                                    </div>
	                                </a>
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="https://laravel.pixelstrap.com/viho/assets/images/faq/2.jpg" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6>Spoken English</h6>
	                                    </div>
	                                </a>
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="https://laravel.pixelstrap.com/viho/assets/images/faq/4.jpg" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6>Web Devlopment.</h6>
	                                    </div>
	                                </a>
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="https://laravel.pixelstrap.com/viho/assets/images/faq/3.jpg" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6>Advance Design.</h6>
	                                    </div>
	                                </a>
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>-->
	            </div>
	        </div>	          
</div>

@include('dashboard.master.kelas.add')
  @include('dashboard.master.kelas.edit')
  @pushOnce('js')
  	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <script type="text/javascript">
      $('.show_confirm').click(function(e) {
        var form = $(this).closest("form");
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                // timer: 3000
              });
              form.submit();
            } else {
              swal("Your imaginary file is safe!", {
                icon: "info"
              });
            }
          })
      });
    
      @if (session()->has('success'))
        toastr.success(
          '{{ session('success') }}',
          'Wohoooo!', {
            showDuration: 300,
            hideDuration: 900,
            timeOut: 900,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
          }
        );
      @elseif (session()->has('error'))
        toastr.error(
          '{{ session('error') }}',
          'Whoops!', {
            showDuration: 300,
            hideDuration: 900,
            timeOut: 900,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
          }
        );
      @endif
    
      $(document).ready(function() {
        $('.edit').on("click", function(e) {
          e.preventDefault()
          var id = $(this).attr('data-bs-id');
          $.ajax({
            url: "/master/pengajar/edit/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
              $('#id_pengajar').val(data.id_pengajar);
              $('#nm_pengajar').val(data.nm_pengajar);
              $('#wkt_mulai').val(data.wkt_mulai);
              $('#wkt_akhir').val(data.wkt_akhir);
              $('input[id="stts_pengajar"][value="' + data.stts_pengajar + '"]').prop('checked', true);
              $('#editPengajar').modal('show');
              console.log(data.stts_pengajar)
            }
          });
        });

        $('#update').on("click", function(e) {
          e.preventDefault()
          var id_pengajar = $("#id_pengajar").val();
          $.ajax({
            type: "PUT",
            data: $('#datapengajar').serialize(),
            url: '/master/pengajar/update/' + id_pengajar,
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
              toastr.success(
                data.success,
                'Wohoooo!', {
                  showDuration: 300,
                  hideDuration: 900,
                  timeOut: 900,
                  closeButton: true,
                  newestOnTop: true,
                  progressBar: true,
                  onHidden: function() {
                    window.location.reload();
                  }
                }
              );
            },
            error: function(data) {
              var errors = data.responseJSON.errors;
              var errorsHtml = '';
              $.each(errors, function(key, value) {
                errorsHtml += '<li>' + value[0] + '</li>';
              });
              toastr.error(errorsHtml, 'Whoops!');
            }
          });
        });
      });

      $(function () {
        function processAjaxData(urlPath){
          window.history.pushState(null, null, urlPath);
        }

        function addModal() {
          let urlParams = new URLSearchParams(window.location.search);
          let isOpen = urlParams.has('modal-add-is-open');
          if (typeof isOpen === 'boolean' && isOpen === true) {
            console.log(typeof isOpen); // true
            let addpengajar = $('#addkelas');
            addpengajar.modal('show');
            addpengajar.on('hidden.bs.modal', function (event) {
              processAjaxData('/master/kelas');
            });
          }

        }

        addModal();
      });



	function successModal() {
	Swal.fire(
  	'Kerja Bagus!',
  	'Anda Telah Menyelesaikan Kelas Anda!',
  	'success'
	)
	}


    </script>
  @endPushOnce
@endsection

