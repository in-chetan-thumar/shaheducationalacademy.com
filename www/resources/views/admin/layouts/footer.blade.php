<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © {{config('constants.APP_NAME')}}.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    @if(!empty(config('constants.DEVELOPED_BY')))
                        Design & Develop by {{config('constants.DEVELOPED_BY')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
