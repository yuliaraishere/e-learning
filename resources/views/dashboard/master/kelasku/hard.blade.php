@extends('layouts.nav')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
  @endPushOnce
  <div class="page-body">
  <div class="col-sm-6">
                  <h3>HardSkill</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="kelasku">Kelasku</a></li>
                    <li class="breadcrumb-item">Hardskill   </li>                    
                  </ol>
                </div>
                <div class="container-fluid">          
              <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Example</h5>
                  </div>
                  <div class="card-body">
                    <!-- cd-timeline Start-->
                    <section class="cd-container" id="cd-timeline">
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture bg-primary"><i class="icon-pencil-alt"></i></div>
                        <div class="cd-timeline-content">
                          <h4>Title of section<span class="digits"> 1</span></h4>
                          <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p><span class="cd-date">Jan <span class="counter digits"> 14</span></span>
                        </div>
                      </div>
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie bg-secondary"><i class="icon-video-camera"></i></div>
                        <div class="cd-timeline-content">
                          <h4>Title of section<span class="digits"> 2</span></h4>
                          <div class="embed-responsive embed-responsive-21by9 m-t-20">
                            <iframe src="https://www.youtube.com/embed/wpmHZspl4EM" allowfullscreen=""></iframe>
                          </div><span class="cd-date">Jan <span class="counter digits">18</span></span>
                        </div>
                      </div>
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture bg-success"><i class="icon-image"></i></div>
                        <div class="cd-timeline-content">
                          <h4>Title of section<span class="digits"> 3</span></h4><img class="img-fluid p-t-20" src="../assets/images/banner/1.jpg" alt=""><span class="cd-date">Jan <span class="counter digits">24</span></span>
                        </div>
                      </div>
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location bg-info"><i class="icon-pulse"></i></div>
                        <div class="cd-timeline-content">
                          <h4>Title of section<span class="digits"> 4</span></h4>
                          <audio class="m-t-20" controls="">
                            <source src="../assets/audio/horse.ogg" type="audio/ogg">                                                Your browser does not support the audio element.
                          </audio><span class="cd-date">Feb <span class="counter digits">14</span></span>
                        </div>
                      </div>
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location bg-warning"><i class="icon-image"></i></div>
                        <div class="cd-timeline-content">
                          <h4>Title of section<span class="digits"> 5</span></h4><img class="img-fluid p-t-20" src="../assets/images/banner/3.jpg" alt=""><span class="cd-date">Feb <span class="counter digits">18</span></span>
                        </div>
                      </div>
                      <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie bg-danger"><i class="icon-pencil-alt"></i></div>
                        <div class="cd-timeline-content">
                          <h4>Final Section</h4>
                          <p class="m-0">This is the content of the last section</p><span class="cd-date">Feb <span class="counter digits">26</span></span>
                        </div>
                      </div>
                    </section>
                    <!-- cd-timeline Ends-->
                  </div>
                </div>
              </div>
            </div>
          </div>
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-md-12">
            <!-- Bookmark Start-->              
            <!-- Bookmark Ends-->
            <div class="default-according" id="accordion1">
                      <div class="card">
                        <div class="card-header bg-primary" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link text-white" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Pidato</button>
                          </h5>
                        </div>
                        <div class="collapse show" id="collapseFour" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                          <div class="card-body">
                          <ul class="nav nav-pills nav-warning" id="pills-warning-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="pills-warning-home-tab" data-bs-toggle="pill" href="#pills-warning-home" role="tab" aria-controls="pills-warning-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>E-Book</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-profile-tab" data-bs-toggle="pill" href="#pills-warning-profile" role="tab" aria-controls="pills-warning-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Video</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-contact-tab" data-bs-toggle="pill" href="#pills-warning-contact" role="tab" aria-controls="pills-warning-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Audio</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-tugas-tab" data-bs-toggle="pill" href="#pills-warning-tugas" role="tab" aria-controls="pills-warning-tugas" aria-selected="false"><i class="icofont icofont-file"></i>Tugas</a></li>
                    </ul>
                    <div class="tab-content" id="pills-warning-tabContent">
                      <div class="tab-pane fade show active" id="pills-warning-home" role="tabpanel" aria-labelledby="pills-warning-home-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, quos reprehenderit ex voluptate non beatae sequi possimus consequuntur itaque eveniet recusandae deserunt sapiente porro cupiditate doloribus magnam similique! Provident, nostrum.</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-profile" role="tabpanel" aria-labelledby="pills-warning-profile-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-contact" role="tabpanel" aria-labelledby="pills-warning-contact-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-tugas" role="tabpanel" aria-labelledby="pills-warning-tugas-tab">                      
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Single File Upload</h5>
                  </div>
                  <div class="card-body">
                    <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
                      <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                        <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                      </div>
                    </form>
                  </div>                
              </div>
              </div>
              </div>
                      </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="card">
                        <div class="card-header bg-primary" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Penyampaian Pendapat</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordion1">
                        <div class="card-body">
                          <ul class="nav nav-pills nav-warning" id="pills-warning-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="pills-warning-home-tab" data-bs-toggle="pill" href="#pills-warning-home" role="tab" aria-controls="pills-warning-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>E-Book</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-profile-tab" data-bs-toggle="pill" href="#pills-warning-profile" role="tab" aria-controls="pills-warning-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Video</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-contact-tab" data-bs-toggle="pill" href="#pills-warning-contact" role="tab" aria-controls="pills-warning-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Audio</a></li>
                    </ul>
                    <div class="tab-content" id="pills-warning-tabContent">
                      <div class="tab-pane fade show active" id="pills-warning-home" role="tabpanel" aria-labelledby="pills-warning-home-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, quos reprehenderit ex voluptate non beatae sequi possimus consequuntur itaque eveniet recusandae deserunt sapiente porro cupiditate doloribus magnam similique! Provident, nostrum.</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-profile" role="tabpanel" aria-labelledby="pills-warning-profile-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-contact" role="tabpanel" aria-labelledby="pills-warning-contact-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="card">
                        <div class="card-header bg-primary" id="headingSix">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Tipografi</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordion1">
                        <div class="card-body">        
                    <ul class="nav nav-pills nav-warning" id="pills-warning-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="pills-warning-deskripsi-tab" data-bs-toggle="pill" href="#pills-warning-deskripsi" role="tab" aria-controls="pills-warning-deksripsi" aria-selected="true"><i class="icofont icofont-file"></i>Deskripsi</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-ebook-tab" data-bs-toggle="pill" href="#pills-warning-ebook" role="tab" aria-controls="pills-warning-ebook" aria-selected="false"><i class="icofont icofont-book-alt"></i>E-Book</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-video-tab" data-bs-toggle="pill" href="#pills-warning-video" role="tab" aria-controls="pills-warning-video" aria-selected="false"><i class="icofont icofont-ui-video-play"></i>Video</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-audio-tab" data-bs-toggle="pill" href="#pills-warning-audio" role="tab" aria-controls="pills-warning-video" aria-selected="false"><i class="icofont icofont-file-audio"></i>Audio</a></li>
                    </ul>
                    <div class="tab-content" id="pills-warning-tabContent">
                      <div class="tab-pane fade show active" id="pills-warning-deskripsi" role="tabpanel" aria-labelledby="pills-warning-deskripsi-tab">
                        <p class="mb-0 m-t-30">Ini nantinya akan berisi deskripsi</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-ebook" role="tabpanel" aria-labelledby="pills-warning-ebook-tab">
                      <div class="card-body">
                      <iframe style="width:900px;height:500px" src="https://online.fliphtml5.com/ljrpp/yhma/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>
                      </div>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-video" role="tabpanel" aria-labelledby="pills-warning-video-tab">
                      <br>
                      <br>  
                      <div class="card-board">
                        <iframe width="900px" height="500px" src="https://www.youtube.com/embed/5hUriz2KAjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-audio" role="tabpanel" aria-labelledby="pills-warning-audio-tab">
                      <br>
                      <br>  
                        <div class="card-board"></div>
                        <audio src="{{asset('assets/audio/tipografi.ogg')}}"controls height="200"></audio>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            </div>
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</div>


  
  @pushOnce('js')
  	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
	  <script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js')}}"></script>
    <script src="{{ asset('assets/js/timeline/timeline-v-1/main.js')}}"></script>
    <script src="{{ asset('assets/js/modernizr.js')}}"></script>
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

