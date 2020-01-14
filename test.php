<html>
    <head></head>
    <body>
        <script>
        function btcConvert(input){
            var price = "345";
            var output = input.value * price;
            var co = document.getElementById('ci');
            ci.value=output.toFixed(1);
        }
        </script>
     <div>  
 <span class="s-text">Amount(btc):</span><br>
    <input type="text" id="bi" name="bi" onchange="btcConvert(this);" onkeyup="btcConvert(this);">
         <br>
    <span class="s-text">Amount in(&#36;):</span>
         <br>
    <input type="text" id="ci" name="ci" placeholder="Amount you get in Dollar">
         <br>
        </div> 
    </body>
</html>