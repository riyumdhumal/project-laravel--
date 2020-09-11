<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\task;


class TodoController extends Controller
{
    public function index(Request $r)
    {
        //return view('fruit',['name'=>['Mango','Apple','Jackfruit','Orange']]);
       // echo"In controller form";
       // print_r($r->input());

       /*Validation in laravel
       validate() Method of request class.in order 




       first parameter:
       $r->validate(['fieldname1'=>'rule1|rule2|.....rulen'],
       'fieldname2'=>'rule1|rule2|.....rulen'],
       'fieldname1'=>'rule1|rule2|.....rulen'],'fieldname1'=>'rule1|rule2|.....rulen'],


       'fieldnamen'=>'rule1|rule2|.....rulen'],



       ]);

       array2:we can have customize msg
       [
           'fieldname.rule'=>'customize error msg',
       ]
       */
            $r->validate(['title'=>'required',
            'details'=>'required',
            'date'=>'required',
    ],[ 

        'title.required'=>'can not be blank',
        'title.email'=>'title must be in email format'
    
    

           
     ]);

     //create object of model(task) class


        $t=new task();

        $uid= Auth::id();
        //echo $uid;
        echo"<br>";
        $user=Auth::user();
        $uname=$user['email'];
        

        $t->uid=$uid;

        $t->uname=$uname;

        $t->title=$r->input('title');
        $t->details=$r->input('details');
        $t->date=$r->input('date');
        
       $res= $t->save();//insert function
         
       if($res==1)
       {
          // echo"Record inserted successfully";
            return redirect('dashboard');
        }
       else
       {
           echo"failed to insert record";
       }


        /*

       echo $r->input('title');
       echo"<br>";
       echo $r->input('details');
       echo"<br>";
       echo $r->input('date');
       echo"<br>";
      
       echo $r->input('Country');
       echo"<br>";

        $name=array();
        $name=$r->input('c');
        //print_r($name);
        $n=count($name);

        for($i=0;$i<$n;$i++)
        {
           echo $name[$i];
           echo"<br>";
        }
*/
      // print_r( $r->input('c'));
       echo"<br>";
    
    }

    

    public function editrecord($rid)
    {
       // return $rid;

       /*redirection syntax:
       return redirect('url');
       */ 
       return redirect('form');

    }

    public function store(Request $r)
    {
        /*file('filename') is the method in request class  */

       // return $r->file('fname')->store('public');

       /*1]storing the image with its orignal name 
        2]to store file orignal name use storeAs('public',fileorignalname)
*/
       $oname=$r->file('fname')->getClientOriginalName();
       //return $oname;



       //return $r->file('fname')->storeAs('public',$oname);
       /*
       if you want to display the image on the browesr stored in
       storage/app/public
       */

       $url=storage::url($oname);
      // return $url;

      return "<img src=".$url.">";
    }

    public function display()
    {
        //to display the record from the table

        /*

        To fetch the record from database.
        $variable=modelname::all();
        */

        $data=task::all();
       // print_r('$data');

      /* foreach($data as $d)
       {
           echo $d->title;
           echo"<br>";

           echo $d->details;
           echo"<br>";
           echo $d->data;
           echo"<br>";
       }*/

       $uid=Auth::id();
       $user=Auth::user();
       $uname=$user['email'];

       $data=task::where('uid','=',$uid)->get();

       return view('display',compact("data"));


    }

    public function delete($rid)
    {
       // return($rid);
       //searching

       $t=task::find($rid);
       //delete
      $res=$t->delete();

     /* if($res==1)
      {
          echo"record deleted...";
      }
      else
      {
            echo"Failed to delete record..!";
      }*/

      return redirect('dashboard');

    }
    public function edit($rid)
    {
        //return $rid;
        $data=task::find($rid);
        echo $data->title;
        print_r($data);
        echo"<br>";
        echo $data->details;
        echo"<br>";
        echo $data->date;
        echo"<br>";
    }



    public function Updaterecord (Request $r, $rid)
    {
       /* echo $rid;
        echo "<br>";
        echo $r->input('title');

        echo "<br>";
        echo $r->input('details');

        echo "<br>";
        echo $r->input('date');

        */

        //checking whether we get edited

        $t=task::find($rid);
        $t->title=$r->input('title');
        $t->details=$r->input('details');
        $t->date=$r->input('date');

        $res=$t->save();

        if($res==1)
             {
                     return redirect('dashboard');
             }
        else
            {
                     echo"failed to update record";     
            }

    }
}
