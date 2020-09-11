<!DOCTYPE html>
<html>
    <head>
        <title>Task</title>
    </head>
    <body>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $er)

            <li style="color:red">{{ $er }}</li>
            @endforeach
        </ul>
        @endif
    <!--error msg end
-->        <form method="POST"action="/update/{{$data->id}}">
        @csrf
            <table>
                <tr>
                    <td>
                        Title:
                    </td>
                    <td>
                        <input type="text"name="title"value="{{$data->title}}">
                    </td>
                </tr>
                <tr>
                    <td>Details</td>
                    <td>
                        <input type="text"name="details"value="{{$data->details}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="date"name="date"value="{{$data->date}}">
                    </td>
                </tr>
          
          <!--
                <tr>
                    <td>
                        Select Country:
                    </td>
                    <td>
                        <select name="country">
                            <option>Select</option>
                            <option value="india">India</option>
                            <option value="sri lanka">Sri Lanka</option>
                            <option value="america">America</option>
                        </select>
                    </td>
                </tr>
                <tr>

                <tr>
                    <td>
                        Select Course:
                    </td>
                            
                    <td>
                        <input type="checkbox"name="c[]"value="HTML">HTML<br>
                        <input type="checkbox"name="c[]"value="CSS">CSS<br>
                        <input type="checkbox"name="c[]"value="Javascript">Javascript<br>
                        <input type="checkbox"name="c[]"value="PHP">PHP<br>
                        <input type="checkbox"name="c[]"value="Laravel">Laravel<br>
                    </td>
                </tr>

                -->
                    <td>
                        <input type="submit"name="send"value="Update">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>