<form action="/Person/Create" method="post">
    <div class="col-md-6">
    <br><label><b>ชื่อ</b></label>
    <input type="text" class="form-control">                 
    </div>

    <div class="col-md-6">
    <br><label><b>นามสกุล</b></label>
    <input type="text" class="form-control">
    </div>

    <br><label><b>ที่อยู่</b></label>
    <br><textarea type="text" class="form-control" rows="3" cols="110"></textarea>

    <label for="phone">เบอร์โทรศัพท์</label><br><br>
    <input type="tel" placeholder="099-999-9999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>

    <input type="radio" name="gender" value="male"> ชาย
    <input type="radio" name="gender" value="female"> หญิง
    <input type="checkbox"> มีรถยนต์ส่วนตัว

    <ul>
        <li>บรรทัดที่ 1</li>
        <li style="color:green">บรรทัดที่ 2</li>
        <li style="background-color:red">บรรทัดที่ 3</li>
        <li>บรรทัดที่ 4</li>
    <ul>

    <div id="box1" style="width:30px;height:20px;background-color:red"></div>
    <div id="box2" style="width:20px;height:30px;background-color:yellow"></div>



<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".box").fadeIn(1000);
  });
});
</script>

<div class="box" style="display:none;">Hello</div>
<div class="box" style="display:none;">Hello</div>
<div class="box" style="display:none;">Hello</div>

<button>Click to fade in boxes</button><br><br>



 
<script>
    $("div").even().removeClass("box");
</script>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#li_2" ).css("color", "green");
    $("#li_3" ).css("background-color", "red");
  });
});
</script>

<button>Set the color property</button>

<ul>
        <li>บรรทัดที่ 1</li>
        <li id="li_2">บรรทัดที่ 2</li>
        <li id="li_3">บรรทัดที่ 3</li>
        <li>บรรทัดที่ 4</li>
<ul>

    <button type="submit" value="บันทึก" id="submit" class="btn btn-info mt-3">



<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".tweet").val("Having Lunch");
    });
});
</script>

<p class="tweet"></p>

<button>Set the value</button>

</form>
