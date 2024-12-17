@extends('layouts.nav')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
  @endPushOnce
  <div class="page-body">  
                <div class="card">
 <div class="card-header pb-0 d-flex justify-content-between align-items-center">
   <h5>Sertifikat</h5>   
 </div>
 <div class="card-body">
   <div class="user-status table-responsive">
     <table class="table table-bordernone">
       <thead>
         <tr>
           <th scope="col">Nama Sertifikat</th>
           <th scope="col">Jenis Sertifikat</th>
           <th scope="col">Nilai Kemampuan</th>
           <th scope="col">Masa Berlaku</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td class="bd-t-none u-s-tb">             
               <div class="d-inline-block">
                 <h6>HTML & CSS Dasar<span class="text-muted"></span></h6>
               </div>
             </div>
           </td>
           <td>Web Design</td>
           <td>
             <div class="progress-showcase">
               <div class="progress" style="height: 8px;">
                 <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </td>
           <td>1 Tahun</td>
         </tr>
         <tr>
           <td class="bd-t-none u-s-tb">
             <!--<div class="align-middle image-sm-size d-flex align-items-center"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/1.jpg" alt="">-->
               <div class="d-inline-block">
                 <h6>Bahasa Inggris Intermediate<span class="text-muted"></span></h6>
               </div>
             </div>
           </td>
           <td>Bahasa</td>
           <td>
             <div class="progress-showcase">
               <div class="progress" style="height: 8px;">
                 <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </td>
          <td>3 Tahun</td>
        </tr>
        <tr>
          <td class="bd-t-none u-s-tb">
            <!--<div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/5.jpg" alt="">-->
                <div class="d-inline-block">
                  <h6>Glass Morph<span class="text-muted"></span></h6>
                </div>
             </div>
           </td>
           <td>Ms. Powerpoint</td>
           <td>
             <div class="progress-showcase">
               <div class="progress" style="height: 8px;">
                 <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </td>
           <td>1 Tahun</td>
         </tr>
         <tr>
           <td class="bd-t-none u-s-tb">
             <!--<div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/6.jpg" alt="">-->
               <div class="d-inline-block">
                 <h6>Self Development <span class="text-muted"></span></h6>
               </div>
             </div>
           </td>
           <td>Soft Skill</td>
           <td>
             <div class="progress-showcase">
               <div class="progress" style="height: 8px;">
                 <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           </td>
           <td>6 Month</td>
         </tr>
         <tr>
           <td class="bd-t-none u-s-tb">
             <!--<div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/7.jpg" alt="">-->
               <div class="d-inline-block">
                  <h6>Typewriting and Public Speaking <span class="text-muted"></span></h6>
               </div>
             </div>
           </td>
           <td>Hard Skill</td>
             <td>
               <div class="progress-showcase">
                 <div class="progress" style="height: 8px;">
                   <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
               </div>
             </td>
             <td>1 Tahun</td>
         </tr>
       </tbody>
     </table>
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

