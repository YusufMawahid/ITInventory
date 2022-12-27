@extends('layouts.app')
@section('content')
  <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">FILTER BY DATE</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="form-wrap">
                                            <form>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">START</label>
                                                        <input type="date" name="start_date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">END</label>
                                                        <input type="date" name="end_date" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10 text-left">&nbsp;</label>
                                                        <button class="form-control btn btn-success btn-anim"><i class="icon-magnifier"></i><span class="btn-text">SEARCH</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="row heading-bg  bg-white">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-9">
                            <h5 class="txt-black"> Laporan Pemasukan</h5>
                        </div>
                    </div>
                     <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark"><i class="icon-pie-chart mr-10"></i>Donut Chart</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div> 
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p class="text-muted">Just add in span<code> class="donut"</code>.</p>
                                    <div class="row mt-40">
                                        <div class="col-sm-2 col-xs-6">
                                            <span class="donut" data-peity='{ "fill": ["#fcb03b", "#ea65a2"]}'>1/5</span>
                                            <div>Data : 1/5</div>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <span class="donut" data-peity='{ "fill": ["#fcb03b", "#ea65a2"]}'>226/360</span>
                                            <div>Data : 226/360</div>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <span class="donut" data-peity='{ "fill": ["#fcb03b", "#ea65a2"], "innerRadius": 16, "radius": 32 }'>0.52/1.561</span>
                                            <div>Data : 0.52/1.561</div>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <span class="donut" data-peity='{ "fill": ["#fcb03b", "#ea65a2"], "innerRadius": 20, "radius": 32 }'>1,4</span>
                                            <div>Data : 1,4</div>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <span class="donut" data-peity='{ "fill": ["#fcb03b", "#ea65a2"], "innerRadius": 23, "radius": 32 }'>226,134</span>
                                            <div>Data : 226,134</div>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <span class="donut" data-peity='{ "fill": ["#fcb03b", "#ea65a2"], "innerRadius": 8, "radius": 32 }'>0.52,1.041</span>
                                            <div>Data : 0.52, 1.041</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
@endsection