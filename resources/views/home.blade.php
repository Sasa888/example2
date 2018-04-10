@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Select your bonus</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                        <h4><strong>Usage of IT device</strong></h4>
                        <p>The employee can use one of the following IT devices. The devices remain property of the employer until end of depreciation. Benefit in kind can apply on private use</p>
                    <br>
                    <br>
                      
                        <form  method="post" action="/confirm" >
                                {{ csrf_field() }}
                            <div class="row">
                                  <div class="col-6 col-md-4"><strong><a href="https://www.apple.com/iphone-8/" target="_blank"><h3>iPhone</h3></a></strong><hr>
                                  <br><br>
                                      <div class="form-check">
                                         <input  class="check" type="checkbox" id="defaultCheck"  value="iPhone8-64GB"  name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                 8 - 64 GB - 500&euro;
                                            </label><br>

                                         <input  class="check" type="checkbox" id="defaultCheck" value="iPhone8-256GB"  name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                 8 - 256 GB - 550&euro;
                                            </label><br>

                                          <input  class="check" type="checkbox" id="defaultCheck"  value="iPhoneX-256GB"  name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                X 256 GB - 800&euro;
                                            </label>
                                     </div><br>

                                  </div>
        
                                  <div class="col-6 col-md-4"><strong><a href="https://www.apple.com/ipad/" target="_blank"><h3>iPad</h3></a></strong><hr>
                                   <br><br>
                                     <div class="form-check">
                                         <input class="check2" type="checkbox" id="defaultCheck2" value="iPad10,5inch64GB"  name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                Pro 10,5  Inch 64GB - 450&euro;
                                             </label><br>
                                        <input class="check2" type="checkbox" id="defaultCheck2" value="iPad10,5inch256GB"  name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                 Pro 10,5  Inch 256GB - 550&euro;
                                            </label><br>
                                        <input class="check2" type="checkbox" id="defaultCheck2" value="iPad12,9,inch256GB"  name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                 Pro 12,9  Inch 256GB - 650&euro;
                                            </label><br>
                                    </div>   
                                  </div>
                                  
                                  <div class="col-6 col-md-4"><strong><a href="https://www.apple.com/imac/" target="_blank"><h3>iMac</h3></a></strong><hr><br><br>
                                     <div class="form-check">
                                         <input class="check2" type="checkbox" value="4K3Ghz21,5" id="defaultCheck2" name="device[]">
                                             <label class="form-check-label" for="defaultCheck1">
                                                    4K 3 Ghz 21,5' - 1000&euro;
                                            </label><br>

                                         <input class="check2" type="checkbox" value="5K3,5Ghz27" id="defaultCheck2" name="device[]" >
                                             <label class="form-check-label" for="defaultCheck1">
                                                  5K 3,5 Ghz 27' - 1500&euro;
                                            </label>
                                    </div>   
                                  </div>  
                                </div>
                                  
                            
                                    <br>
                                        <p style="text-decoration:underline;"><strong><small>** Please note that you can choose max one iPhone and max one iPod or iMac</small></strong></p>
                                    <br> 
                               
   
                                            <div class="col-lg-6">
                                                    Amount paid last year: 
                                                <div class="input-group">
                                                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="mytext[]" id="Amount" value="">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-6">
                                                    Deduct from bonus: 
                                                  <div class="input-group">
                                                      <span class="input-group-addon">€</span>
                                                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="mytext[]" id="Deduct" value="">
                                                </div>
                                            </div>
                                            
                                  <br><br><br>

                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            var X = 94;
                                            $('#Amount').keyup(function(){
                                                
                                                if(!isNaN(this.value)){
                                                   $('#Deduct').val(parseInt(this.value)/X *70).toFixed(1);
                                                }
                                            });
                                    
                                            $('#Deduct').keyup(function(){
                                                $('#Amount').val(parseInt(this.value) * X/70).toFixed(1);
                                                
                                            });
                                        });
                                    </script>
                                
                            <hr>

                    <h4><strong>Reimburse Pension 3th pillar</strong></h4>
                    <p>By selecting this option, I confirm to deliver scan of attestation of last year to Hr.be.payroll@kuehne-nagel.com.  Scan named "last name + year". This option provide a max profit 200 euro net</p>
                    <label class="checkbox-inline">
                        <input type="radio" id="check" name="reimburse_Pension[]"  value="Yes" onclick="selectOnlyThis3(this)" required> Yes
                    </label>
                    <label class="checkbox-inline">
                         <input type="radio"  id="check" name="reimburse_Pension[]"  value="No" onclick="selectOnlyThis3(this)"required> No
                    </label>

                    <hr>

                     <h4><strong>Remainder can be paid in Warrants</strong></h4>
                    <p>Bonus amount will be increased with 25% for warrants. Option provide a higher net pay out than cash payment</p>
                    <label class="checkbox-inline">
                        <input type="radio" name="bonus_remainder[]"  value="Yes" required> Yes <!-- onclick="selectOnlyThis4(this)" --> 
                    </label>
                    <label class="checkbox-inline">
                         <input type="radio" name="bonus_remainder[]"  value="No"  required> No
                    </label>
                    <br><br><br>
                    
                     <button type="submit" class="btn btn-primary">
                                            CONFIRM & SEND
                     </button>
                            
                    </form>
                  
               </div>

            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script src="{{ URL::to('js/checkbox.js') }}"></script>
@endsection
