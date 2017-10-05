<!-- First Name Field  -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Middle Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middle_name', 'Middle Name:') !!}
    {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Birth Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birth_date', 'Birth Date:') !!}
    {!! Form::date('birth_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Birth Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birth_place', 'Birth Place:') !!}
    {!! Form::text('birth_place', null, ['class' => 'form-control']) !!}
</div>

<!-- Sss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sss', 'Sss:') !!}
    {!! Form::text('sss', null, ['class' => 'form-control']) !!}
</div>

<!-- Phic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phic', 'Phic:') !!}
    {!! Form::text('phic', null, ['class' => 'form-control']) !!}
</div>

<!-- Hdmf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hdmf', 'Hdmf:') !!}
    {!! Form::text('hdmf', null, ['class' => 'form-control']) !!}
</div>

<!-- Bir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bir', 'Bir:') !!}
    {!! Form::text('bir', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_code', 'Tax Code:') !!}
    {!! Form::select('tax_code', ['Z' => 'Single', 'SME' => 'ME', 'ME1' => 'ME1', 'ME2' => 'ME2', 'ME3' => 'ME3', 'ME4' => 'ME4'], null, ['class' => 'form-control']) !!}
</div>

<!-- Drivers License Field -->
<div class="form-group col-sm-6">
    {!! Form::label('drivers_license', 'Drivers License:') !!}
    {!! Form::text('drivers_license', null, ['class' => 'form-control']) !!}
</div>

<!-- Sick Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sick_leave', 'Sick Leave:') !!}
    {!! Form::number('sick_leave', null, ['class' => 'form-control']) !!}
</div>

<!-- Vacation Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vacation_leave', 'Vacation Leave:') !!}
    {!! Form::number('vacation_leave', null, ['class' => 'form-control']) !!}
</div>

<!-- Emergency Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_leave', 'Emergency Leave:') !!}
    {!! Form::number('emergency_leave', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['regular' => 'Regular', 'probitionary' => 'Probitionary', 'contractual' => 'Contractual'], null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Civil Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('civil_status', 'Civil Status:') !!}
    {!! Form::select('civil_status', ['single' => 'Single', 'married' => 'Married'], null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::select('nationality', $nationality, null, ['class' => 'form-control']) !!}
</div>

<!-- Religion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('religion', 'Religion:') !!}
    {!! Form::select('religion', ['Christian' => 'Christian', 'Muslim' => 'Muslim', 'Roman Catholic' => 'Roman Catholic'], null, ['class' => 'form-control']) !!}

</div>

<!-- Contact Numbers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_numbers', 'Contact Numbers:') !!}
    {!! Form::text('contact_numbers', null, ['class' => 'form-control']) !!}
</div>

<!-- Present Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('present_address', 'Present Address:') !!}
    {!! Form::textarea('present_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Permanent Address,nullable Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('permanent_address,nullable', 'Permanent Address,nullable:') !!}
    {!! Form::textarea('permanent_address,nullable', null, ['class' => 'form-control']) !!}
</div>

<!-- Affiliations Field -->
<div class="form-group col-sm-6">
    {!! Form::label('affiliations', 'Affiliations:') !!}
    {!! Form::text('affiliations', null, ['class' => 'form-control']) !!}
</div>

<!-- Professional License Field -->
<div class="form-group col-sm-6">
    {!! Form::label('professional_license', 'Professional License:') !!}
    {!! Form::text('professional_license', null, ['class' => 'form-control']) !!}
</div>

<div class="col-lg-12">

    <div class="panel panel-primary" id="add-new-element">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Employment History </h3> &nbsp; (Pls. start with present to last employer)
            <div class="btn-group pull-right">
                {!! Form::button('Add New', ['class'=>'btn btn-success btn-sm', '@click'=>'addNewElement']) !!}
            </div>
        </div>
        <div class="panel-body">
            {{--<employment_history v-for="(element, index) in elements"></employment_history>--}}

            <div class="row" v-for="(element, index) in elements">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Employment #: @{{ index + 1 }}</h4>
                            <div class="btn-group pull-right">
                                {{--<span class="float-right" style="cursor: pointer" @click="deleteElement(index)">--}}
                                {{--x--}}
                                {{--</span>--}}
                                <a href="#" class="btn btn-danger btn-sm" :text="deleteElement" :key="deleteElement" @click="deleteElement(index)">Delete</a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-sm-6">
                                <label>Company Name:</label>
                                <input type="text" name="emp_name[]" class="form-control" value=""
                                       v-model="element.emp_name"/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>From:</label>
                                <input type="date" name="emp_start_date[]" class="form-control" value=""
                                       v-model="element.emp_start_date"/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>To:</label>
                                <input type="date" name="emp_end_date[]" class="form-control" value=""
                                       v-model="element.emp_end_date"/>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Job Title</label>
                                <input type="text" name="emp_job_title[]" class="form-control" value=""
                                       v-model="element.emp_job_title"/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Starting Salary</label>
                                <input type="text" name="emp_starting_salary[]" class="form-control" value=""
                                       v-model="element.emp_starting_salary"/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Final Salary</label>
                                <input type="text" name="emp_final_salary[]" class="form-control" value=""
                                       v-model="element.emp_final_salary"/>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Reasons for leaving</label>
                                <textarea type="text" name="emp_reason[]" class="form-control" value=""
                                          v-model="element.emp_reason"></textarea>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Industry Type</label>
                                <input type="text" name="emp_industry_type[]" class="form-control" value=""
                                       v-model="element.emp_industry_type"/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Employment Status</label>
                                <input type="text" name="emp_status[]" class="form-control" value=""
                                       v-model="element.emp_status"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employees.index') !!}" class="btn btn-default">Cancel</a>
</div>

@push('scripts')
<script src="{{ asset('js/employees.js') }}"></script>
@endpush