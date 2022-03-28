@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-6">
    <div class = "row justify-content-center">
        <div class = "col-md-9">
            @if(session()->has('alert'))
                <div class="alert {{ session()->get('alert-type') }}" role="alert">
                {{ session()->get('alert') }}
                 </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Schedule Index</h3>
                    <div class="float-start">
                        <form action="" method="">
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keyword" value="{{ request()->get('keyword')}}"
                                    placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch"/>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
                    <div class="float-end"> 
                        <a href="{{ route('schedule:create') }}" class="btn btn-primary">+ Create New Schedule</a>
                    </div>
                </div>
                        
                <div class = "card-body">
                    <table class = "table">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Attachment</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @foreach ($schedules as $schedule)
                               <tr>
                                   <td>{{$schedule->id}}</td>
                                   <td>{{$schedule->title}}</td>
                                   <td>{{$schedule->description}}</td>
                                   <td>{{$schedule->attachment}}</td>
                                   
                                   <td>
                                       <a href="{{ route('schedule:show', $schedule) }}" class="btn btn-primary">Show</a>
                                       <a href="{{ route('schedule:edit', $schedule) }}" class="btn btn-success">Edit</a>
                                       <a onclick="return confirm('Are you sure?')"
                                        href="{{ route('schedule:destroy', $schedule) }}"
                                        class="btn btn-danger">Delete</a>
                                       <hr>
                                       <a onclick="return confirm('Are you sure want to force delete?')" 
                                        href="{{ route('schedule:force-destroy', $schedule) }}" 
                                        class="btn btn-danger">Force Delete</a>
                                    </td>
                                </tr> 
                            @endforeach

                        </tbody>
                    </table>
                    {{ $schedules->links( )}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection