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
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Customer</th>
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="country">Country</th>
                                <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                                <th class="text-900 sort align-middle white-space-nowrap text-end pe-4" data-sort="payment">Payment
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list" id="table-purchase-body">
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Sylvia Plath</a></th>
                                <td class="align-middle white-space-nowrap country">USA</td>
                                <td class="align-middle white-space-nowrap email">john@gmail.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-success">Success<span class="ms-1 fas fa-check"
                                            data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Homer</a></th>
                                <td class="align-middle white-space-nowrap country">canada</td>
                                <td class="align-middle white-space-nowrap email">sylvia@mail.ru</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-warning">Pending<span
                                            class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Edgar Allan Poe</a></th>
                                <td class="align-middle white-space-nowrap country">UK</td>
                                <td class="align-middle white-space-nowrap email">edgar@yahoo.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-secondary">Blocked<span class="ms-1 fas fa-ban"
                                            data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">William Butler Yeats</a></th>
                                <td class="align-middle white-space-nowrap country">USA</td>
                                <td class="align-middle white-space-nowrap email">william@gmail.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-success">Success<span class="ms-1 fas fa-check"
                                            data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Rabindranath Tagore</a></th>
                                <td class="align-middle white-space-nowrap country">canada</td>
                                <td class="align-middle white-space-nowrap email">tagore@twitter.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-warning">Pending<span
                                            class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Emily Dickinson</a></th>
                                <td class="align-middle white-space-nowrap country">UK</td>
                                <td class="align-middle white-space-nowrap email">emily@gmail.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-secondary">Blocked<span class="ms-1 fas fa-ban"
                                            data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Giovanni Boccaccio</a></th>
                                <td class="align-middle white-space-nowrap country">USA</td>
                                <td class="align-middle white-space-nowrap email">giovanni@outlook.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-warning">Pending<span
                                            class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Oscar Wilde</a></th>
                                <td class="align-middle white-space-nowrap country">USA</td>
                                <td class="align-middle white-space-nowrap email">oscar@hotmail.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-success">Success<span
                                            class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">John Doe</a></th>
                                <td class="align-middle white-space-nowrap country">canada</td>
                                <td class="align-middle white-space-nowrap email">doe@gmail.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-success">Success<span
                                            class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap name"><a
                                        href="../../app/e-commerce/customer-details.html">Emma Watson</a></th>
                                <td class="align-middle white-space-nowrap country">UK</td>
                                <td class="align-middle white-space-nowrap email">emma@gmail.com</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-warning">Pending<span
                                            class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="p-3">
                <p>Use <code>data-list-filter </code>attribute with the select fields and assign the value according to the column
                    name. For example</p>
                <pre class="scrollbar mt-2"><code class="language-html">&lt;select class=&quot;form-select form-select-sm mb-3&quot; data-list-filter=&quot;country&quot;&gt;&lt;/select&gt;</code></pre>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection
