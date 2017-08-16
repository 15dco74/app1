<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
	public function Home()
	{
		echo "Hiii...............";
	}
public function Home1()
	{
		echo "byeeee...............";
	}
	public function Home2()
	{
		return view("first");
	}
	public function Register()
	{
		return view("demo");
	}

    //
}
