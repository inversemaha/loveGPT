@extends('layouts.admin')
@section('title', 'Applicants')
@section('page', 'Applicants')

@section('content')

    <div class="row">
        <div class="col-12">
            @include('includes.admin.message')
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Personal Information</h4>
                    <ul>
                        <li><strong>Name (Bangla): </strong>{{$result->name_bangla}}</li>
                        <li><strong>Name (English): </strong>{{$result->name_english}}</li>
                        <li><strong>NID: </strong>{{$result->nid}}</li>
                        <li><strong>Category: </strong>
                            <?php
                            $cats = (json_decode($result->category, true))
                            ?>

                            <ul>
                                @if($cats!=null)
                                    @foreach($cats as $item)

                                        <li> {{$item}}</li>

                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    </ul>


                    <hr>
                    <h4>Company Info</h4>

                    <ul>
                        <li><strong>Phone Number: </strong>{{$result->phone_number}}</li>
                        <li><strong>Email: </strong>{{$result->email}}</li>
                        <li><strong>Website: </strong>{{$result->website}}</li>
                        <li><strong>Social Link: </strong>{{$result->social_link}}</li>
                    </ul>

                    <h4>Company Information</h4>
                    <ul>
                        <li><strong>company_name_bangla: </strong>{{$result->company_name_bangla}}</li>
                        <li><strong>company_name_english: </strong>{{$result->company_name_english}}</li>
                        <li><strong>company_address: </strong>{{$result->company_address}}</li>
                        <li><strong>company_phone: </strong>{{$result->company_phone}}</li>
                        <li><strong>company_start_date: </strong>{{$result->company_start_date}}</li>
                        <li><strong>business_position_type: </strong>{{$result->business_position_type}}</li>
                        <li><strong>business_type: </strong>{{$result->business_type}}</li>
                        <li><strong>business_products: </strong>{{$result->business_products}}</li>
                        <li><strong>total_sell_2020: </strong>{{$result->total_sell_2020}}</li>
                        <li><strong>total_sell_2019: </strong>{{$result->total_sell_2019}}</li>
                        <li><strong>total_sell_2018: </strong>{{$result->total_sell_2018}}</li>

                        <li><strong>total_expense_2020: </strong>{{$result->total_expense_2020}}</li>
                        <li><strong>total_expense_2019: </strong>{{$result->total_expense_2019}}</li>
                        <li><strong>total_expense_2018: </strong>{{$result->total_expense_2018}}</li>

                        <li><strong>total_profit_2020: </strong>{{$result->total_profit_2020}}</li>
                        <li><strong>total_profit_2019: </strong>{{$result->total_profit_2019}}</li>
                        <li><strong>total_profit_2018: </strong>{{$result->total_profit_2018}}</li>

                        <li><strong>total_investment_2020: </strong>{{$result->total_investment_2020}}</li>
                        <li><strong>total_investment_2019: </strong>{{$result->total_investment_2019}}</li>
                        <li><strong>total_investment_2018: </strong>{{$result->total_investment_2018}}</li>

                        <li><strong>permanent_asset: </strong>{{$result->permanent_asset}}</li>
                        <li><strong>current_asset: </strong>{{$result->current_asset}}</li>
                        <li><strong>total_investment: </strong>{{$result->total_investment}}</li>
                        <li><strong>permanent_asset2: </strong>{{$result->permanent_asset2}}</li>
                    </ul>
                    <hr>
                    <h4>Employee Information</h4>
                    <ul>
                        <li><strong>Monthly Based Female Staff: </strong>{{$result->monthly_based_female_staff}}</li>
                        <li><strong>Monthly Based Male Staff: </strong>{{$result->monthly_based_male_staff}}</li>

                        <li><strong>Production Based Female Staff: </strong>{{$result->production_based_female_staff}}
                        </li>
                        <li><strong>Production Based Male Staff: </strong>{{$result->production_based_male_staff}}</li>

                        <li><strong>temporary_female_staff: </strong>{{$result->temporary_female_staff}}</li>
                        <li><strong>temporary_male_staff: </strong>{{$result->temporary_male_staff}}</li>
                    </ul>
                    <hr>

                    <h4>Bank Loan Information</h4>
                    <?php

                    $bank_data = \App\Models\BankInfo::where('apply_id', $result->id)->get();

                    ?>

                    <table class="table table-bordered">
                        <tr>
                            <th>Concern</th>
                            <th>Bank name</th>
                            <th>Facility</th>
                            <th>Loan Amount</th>
                        </tr>
                        @foreach($bank_data as $item)
                            <tr>
                                <td>{{$item->name_of_concern}}</td>
                                <td>{{$item->name_of_bank}}</td>
                                <td>{{$item->facility}}</td>
                                <td>{{$item->loan_amount}}</td>
                            </tr>
                        @endforeach
                    </table>


                    <hr>
                    <h4>Other Information</h4>
                    <ul>
                        <li><strong>export_status: </strong>{{$result->export_status}}</li>
                        <li><strong>business_documents: </strong></li>
                        <?php
                        $data = (json_decode($result->business_documents, true))
                        ?>
                        <ul>
                            @if($data!=null)
                                @foreach($data as $item)

                                    <li> {{$item}}</li>

                                @endforeach
                            @endif
                        </ul>
                        </li>
                        <li><strong>waste_disposal: </strong>{{$result->waste_disposal}}</li>
                        <li><strong>health_status: </strong>{{$result->health_status}}</li>
                        <li><strong>judge_yourself: </strong>{{$result->judge_yourself}}</li>
                        <li><strong>struggle: </strong>{{$result->struggle}}</li>
                        <li><strong>contribution: </strong>{{$result->contribution}}</li>
                        <li><strong>skill_develop: </strong>{{$result->skill_develop}}</li>
                        <li>
                            <strong>company_financial_status_store: </strong>{{$result->company_financial_status_store}}
                        </li>

                    </ul>


                    <hr>
                    <h4>Documents</h4>
                    <p><strong>Passport File: </strong><a href="/images/documents/{{$result->passport_file}}"
                                                          download></a>
                    </p>
                    <p><strong>Nid File: </strong><a href="/images/documents/{{$result->nid_file}}"
                                                     download></a></p>
                    <p><strong>Trade license File: </strong><a href="/images/documents/{{$result->trade_license_file}}"
                                                               download></a></p>

                    <p><strong>Etin File: </strong>
                        <a href="/images/documents/{{$result->etin_file}}" download>
                            @if($result->etin_file!=null) Download @else
                                <button class="btn btn-warning btn-sm" disabled>No File</button>
                            @endif
                        </a>
                    </p>
                    <p><strong>Vat Registration File: </strong><a
                            href="/images/documents/{{$result->vat_registration_file}}"
                            download>
                            @if($result->vat_registration_file!=null) Download @else
                                <button class="btn btn-warning btn-sm" disabled>No File</button>
                            @endif
                        </a>
                    </p>
                    <p><strong>Memorandum File: </strong><a href="/images/documents/{{$result->memorandum_file}}"
                                                            download>
                            @if($result->memorandum_file!=null) Download @else
                                <button class="btn btn-warning btn-sm" disabled>No File</button>
                            @endif
                        </a>
                    </p>

                    <p><strong>Application Date: </strong>{{$result->created_at}}</p>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
