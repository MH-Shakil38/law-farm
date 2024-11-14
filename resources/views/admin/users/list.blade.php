@extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->
    <div class="card-body position-relative">
      <div class="row">
        <div class="col-lg-12">
            <div id="tableExample4" data-list='{"valueNames":["name","country","email","payment"]}'>
                <div class="row justify-content-end justify-content-end gx-3 gy-0 px-3">
                    <div class="col-sm-auto"><select class="form-select form-select-sm mb-3" data-list-filter="country">
                            <option selected="" value="">Select country</option>
                            <option value="usa">USA</option>
                            <option value="canada">Canada</option>
                            <option value="uk">UK</option>
                        </select></div>
                    <div class="col-sm-auto"><select class="form-select form-select-sm mb-3" data-list-filter="payment">
                            <option selected="" value="">Select payment status</option>
                            <option value="Pending">Pending</option>
                            <option value="Success">Success</option>
                            <option value="Blocked">Blocked</option>
                        </select></div>
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="country">Email</th>
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Phone</th>
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Role</th>

                            </tr>
                        </thead>
                        <tbody class="list" id="table-purchase-body">
                            @forelse ($users as $info)
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">{{ $info->name }}</a></th>
                                <td class="align-middle white-space-nowrap country">{{ $info->email }}</td>
                                <td class="align-middle white-space-nowrap email">{{ $info->phone }}</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-success">{{ $info->role_id == 1 ? 'Admin' : 'Employee' }}<span class="ms-1 fas fa-check"
                                            data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>

@endsection
