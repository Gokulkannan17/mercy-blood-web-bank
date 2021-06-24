<html>
    <title>MERCY Blood Web Bank Registeration Form</title>
    <main>
        <label class="top">MERCY</label>
         <h1>Registeration Form</h1>
         
    </main>
    <head>
        <style>
            .top{
                color: rgb(34, 6, 112);
    font-size: 35px;
    background-color: lightcoral;
    display: block;
   
            }
            main{
                text-align: center;
                text-decoration: none;
                color:blue;
                background-color:orchid;
                display: block;
            }
            body{
                /*background-image: url('back3.jpg');*/
              background-repeat: no-repeat;
              /*background-size: cover;*/
              background-size:cover;
              background-color: rgb(26, 219, 210);
            }
            .control{
    margin-top:50px;
    padding:6px;
    color:black;
    width:300px;
    clear:both;
    background:transparent;
    /*font-weight: bold;*/
    font-family: cursive;
    font-size: normal;
  


}
.contact{
    text-align:center;
    margin-top: 30px;
    background-image: url('back3.jpg');
    background-repeat: no-repeat;
    background-size: cover;

}
.non-control{
    border:none;
    background:transparent;
    color:tomato;
    cursor:pointer;
    padding:6px;
    margin-top: 40px;
    font-weight: bold;
    font-size: medium;
}
.non-control:hover{
     background-color:blue;

}
.no{
    color:black;
}
.BOLD{
    background-position:center;
   

}
.none{
    font-weight:normal;
    font-size: medium;
    font-family:cursive;
    font-size: medium;
  
}
.now{
    margin-left: 60px;
}

        </style>
 <script type="text/javascript">
        window.history.forward();
        function noFront() {
            window.history.forward(1);
        }
</script>
    </head>
    <body>
        <div class="contact">
        <form action="insert.php" method="POST" autocomplete="off">
       
        <label for="name">Name :</label>
        <input type="text" placeholder=""  name="Name"required autocomplete="off" class="control">
        <br>
        <label for="mobile">Mobile No :</label>
        <input type="mobile"  name="mobile" required autocomplete="off" class="control">

        <br>
        <label for="DOB">Date of Birth :</label>
        <input type="date"  autocomplete="off" name="birth"class="control">
        <br>
        <br>
        <br>
        <label for="gen">Gender :</label>
        <input type="radio"name="Yes" value="Male">Male
        <input type="radio"name="Yes" value="Female">Female
        <br>
        <label>Blood Group :</label>
        <select class="control" name="blood">
            <option class="no">A+ve</option>
            <option>A-ve</option>  
            <option>B+ve</option>
            <option>B-ve</option>
            <option>O+ve</option>
            <option>O-ve</option>
            <option>AB+ve</option>
            <option>AB-ve</option>
        </select>
        <br>
        <br>
        <label for="address" class="none"><b>Address</b></label><br><br>
        <textarea cols="45" name="address"rows="12" autocomplete="off" required class="now"></textarea>
        <br>
        <label for="photo" >PHOTO :</label>
        <input type="file" name="pho"class="control"accept="images/*" multiple required>
        <br>
        <!--<button type="submit" value="submit" class="non-control">Go to Home</button> &nbsp &nbsp;-->
        <button type="submit" value="Submit" class="non-control">Submit</button>
        </form>
        </div>

    </body>
      

</html>

