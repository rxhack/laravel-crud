<?php
namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee\EmployeeDetails;

class EmployeeController extends Controller
{
    public function addEmpShow()
    {
        return view('employee.addEmployee');
    }

    public function addEmployee(Request $request)
    {
        $addEmployee = new EmployeeDetails;

        $addEmployee->employeeFName     =  $request->employeeFName;  
        $addEmployee->employeeLName     =  $request->employeeLName; 
        $addEmployee->employeeEmailId   =  $request->employeeEmailId; 
        $addEmployee->employeeContactNo =  $request->employeeContactNo; 
        $addEmployee->employeeSalary    =  $request->employeeSalary; 

        if($addEmployee->save()){
            return redirect()->route('allEmp')->with('success','Employee created successfully');
        }else{
            return redirect()->route('allEmp')->with('error','Something went wrong!');
        }
    }

    public function allEmployee()
    {
        $employees = EmployeeDetails::all();
        return view('employee.viewEmployee',compact('employees'));
    }

    public function editEmployee($Id)
    {
        $employee = EmployeeDetails::where('id',$Id)->first();
        return view('employee.editEmployee',compact('employee'));
    }

    public function updateEmployee($Id,Request $request)
    {
        $editEmployee = EmployeeDetails::where('id',$Id)->first();

        $editEmployee->employeeFName     =  $request->employeeFName;  
        $editEmployee->employeeLName     =  $request->employeeLName; 
        $editEmployee->employeeEmailId   =  $request->employeeEmailId; 
        $editEmployee->employeeContactNo =  $request->employeeContactNo; 
        $editEmployee->employeeSalary    =  $request->employeeSalary; 

        if($editEmployee->update()){
            return redirect()->route('allEmp')->with('success','Employee updated successfully');
        }else{
            return redirect()->route('allEmp')->with('error','Something went wrong!');
        }
    }

    public function deleteEmployee($Id)
    {
        $del = EmployeeDetails::where('id',$Id)->delete();
        if($del)
        {
            return redirect()->route('allEmp')->with('success','Employee deleted successfully');
        }else{
            return redirect()->route('allEmp')->with('error'  ,'Something went wrong!');
        }
    }
}
