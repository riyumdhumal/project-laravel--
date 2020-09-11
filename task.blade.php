<!doctype html>
<html>
<head>
<title>Task</title>
</head>
<body>

<!--Error msg start---

laravel has pre-defined msgess for each rule and those are stored in resource/lang/en/validation.php
when validation fail the error msg realated to that rule is stored -->

<!-- Errorr msg End-->

@if($errors->any())

<ul>
    @foreach($errors->all() as $er)
        
        <li style="color:red"> {{ $er }}</li>
        @endforeach
</ul>
@endif

   <form method="post" action="/insert">
@csrf
        <table>
            <tr>
              <td>
                 Title:
                 </td>
                <td><input type="text" name="title" placeholder="Enter Title"></td>
            </tr>


            <tr>
              <td>
                 Details:
                 </td>
                <td><input type="text" name="details" placeholder="Enter Details"></td>
            </tr>

            <tr>
              <td>
                 Date:
                 </td>
                <td><input type="date" name="date" placeholder= "">
                </td>
            </tr>
<!--
            <tr>
              <td>
                Select Country:
                 </td>
                <td>
                <select name="Country">
                <option value="india">india</option>
                <option value="USA">USA</option>
                <option value="Autrelia">Autrelia</option>
                <option value="Shrilanka">shrilanka</option>
                </select>
                </td>
            </tr>
            <tr>
              <td>
                Course:
                 </td>
                <td>
                <input type="checkbox" name="c[]" value="HTML">HTML<br>
                <input type="checkbox" name="c[]" value="JS">JS<br>
                <input type="checkbox" name="c[]" value="CSS">CSS<br>
                <input type="checkbox" name="c[]" value="PHP">PHP<br>
                <input type="checkbox" name="c[]" value="LARAVEL">LARAVEL<br>
                </td>
            </tr>

            

-->


            <tr>
              
                <td><input type="submit" name="send" value="send"></td>
            </tr>

        </table>
     </form>
</body>
</html>