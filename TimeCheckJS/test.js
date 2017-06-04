<script language="javascript">

var rightnow = new Date();
var backthen = new Date(1953,11,3);
 if (rightnow>backthen)
 {
 document.write(rightnow + " is later than " + backthen + ".");
 }
 else
 {
 document.write("Oh, no! Time is reversed! " + backthen + " is later than " + rightnow + "!");
 }
 </script>