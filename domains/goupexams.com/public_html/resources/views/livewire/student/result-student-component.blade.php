<div>
 

 <style>
    .result {
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;

    margin-top: 50px;
    color: black;
}
h1 {
    font-size: 22px;
    font-weight: bold;
}
h2 {
    font-size: 24px;
    font-weight: bold;
    margin-top: 13px;
        text-align: center;
}
a.Tmam {
    color: #000000;
    font-size: 29px;
    font-weight: bold;
}
h1 {
    color: white;
    font-family: revert;
    font-weight: bold;
}
 
.backf {
    background: white;
    width: 51%;
    text-align: center;
    padding-top: 5px;
    border-radius: 17px;
}
.backf.der {
    height: 53px;
    padding-top: 15px;
}
 
</style>
    <br>
    <br>
    <br>
    
 
    <div class="result">
        <h1>your Result</h1>
        <div class="backf">
        <h2 >{{$exam_result->result}}/{{$questions_number}}</h2>

        </div>
        <h2>يجب الضغط على زر تم لتاكيد امتحانك</h2>
        <div class="backf der">
            <a class="Tmam" href="{{route('index')}}">Done</a>
        </div>
    </div>
    <br>
    <br>
    <br>
 

 
 <script type="text/javascript">
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
</script>

 
 
     
</div>


