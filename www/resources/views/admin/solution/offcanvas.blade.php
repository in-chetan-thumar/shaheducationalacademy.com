<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{isset($solution)?'Edit':'Create new'}} solution</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if(isset($solution))
            {!! Form::open(array('url' => route('solutions.update',$solution->id),'method'=>'PATCH','id'=>'solution-form','files'=>true)) !!}
        @else
            {!! Form::open(array('url' => route('solutions.store'),'method'=>'POST','id'=>'solution-form','files'=>true)) !!}
        @endif

            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                            {!! Form::text('title', isset($solution) ? $solution->title : old('title'), ['class' => 'form-control']) !!}
                            @error('title')
                                <span style="color:red">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!! Form::label('file', 'Solution file', ['style' => 'justify-content: right']) !!}@if (!isset($solution))<span class="required">*</span>
                            @endif
                            {!! Form::file('file', ['class' => 'form-control']) !!}
                            @error('file')
                                <span style="color:red">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\SolutionRequest', '#solution-form'); !!}
<script>
    // Save OR UPDATE DATA
    $('#solution-form').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($('#solution-form')[0]);
        var page = $('.page-number').val()
        formData.append('page', page);
        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $('#status').show();
            $('#preloader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function (data, textStatus, jqXHR) {
                    if (!data.error) {
                        $('#status').hide();
                        $('#preloader').hide();
                        $(".divtable").html(data.view);
                        toastr.success(data.message);
                        let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
                        closeCanvas.click();
                        //location.reload();
                    } else {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error(data.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }
    })
</script>
