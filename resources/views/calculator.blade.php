@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Calculator <span id="span"></span></div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="firstNumber"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Second Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="secondNumber"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Select Operator</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="operator" value="+"/> Add </label>
                                    <label><input type="radio" name="operator" value="-"/> Sub </label>
                                    <label><input type="radio" name="operator" value="*"/> Multi </label>
                                    <label><input type="radio" name="operator" value="/"/> Div </label>
                                    <label><input type="radio" name="operator" value="%"/> Mod </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="result"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="button" class="btn btn-success" id="submitBtn" value="Submit"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var submitBtn = document.getElementById('submitBtn');
        submitBtn.onclick = function ()
        {
           var data  = document.getElementsByName('operator');
           var i;
           var operator;
           var result;
           for (i = 0; i < data.length; i++)
           {
               if(data[i].checked == true)
               {
                   operator = data[i].value;
                   break;
               }
           }
           var firstNumber  = Number(document.getElementById('firstNumber').value);
           var secondNumber = Number(document.getElementById('secondNumber').value);

           switch(operator)
           {
               case '+':
                   result = firstNumber + secondNumber;
                   break;
               case '-':
                   result = firstNumber - secondNumber;
                   break;
               case '*':
                   result = firstNumber * secondNumber;
                   break;
               case '/':
                   result = firstNumber / secondNumber;
                   break;
               case '%':
                   result = firstNumber % secondNumber;
                   break;
           }
           document.getElementById('result').value = result;
        }

       function myWatch() {
           var date = new Date();
           var hour = date.getHours();
           var minute = date.getMinutes();
           var second = date.getSeconds();

           document.getElementById('span').innerHTML = hour + ' : ' + minute + ' ' + second;
       }

        function test() {
            alert('pk');
        }

        setInterval(myWatch, 1000);


        //setTimeout(test, 2000);


    </script>
@endsection







