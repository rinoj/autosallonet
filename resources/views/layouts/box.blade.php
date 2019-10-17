<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">@yield('boxtitle')</h3>
    <div class="box-tools pull-right">
      @yield('boxtitleright')
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    @yield('boxcontent')
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    @yield('boxfooter')
  </div>
  <!-- box-footer -->
</div>