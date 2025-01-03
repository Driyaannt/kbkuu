
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="border-top card-container animate__animated animate__fadeInDown">
            <div class="row gx-0">
              <div class="col-md-4 border-end">
                <div class="p-4 py-3 py-md-4">
                  <p class="fs-4 text-danger mb-0">
                    <span class="text-danger">
                      <span class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>
                    </span>Selling Product
                  </p>
                  <h3 class=" mt-2 mb-0">$3,350,00</h3>
                </div>
              </div>
              <div class="col-md-4 border-end">
                <div class="p-4 py-3 py-md-4">
                  <p class="fs-4 text-primary mb-0">
                    <span class="text-primary">
                      <span class="round-8 bg-primary rounded-circle d-inline-block me-1"></span>
                    </span>Followers
                  </p>
                  <h3 class=" mt-2 mb-0">1,500+</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-4 py-3 py-md-4">
                  <p class="fs-4 text-info mb-0">
                    <span class="text-info">
                      <span class="round-8 bg-info rounded-circle d-inline-block me-1"></span>
                    </span>Campaign
                  </p>
                  <h3 class=" mt-2 mb-0">560</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="col-12">
        <div class="card card-container animate__animated animate__fadeInDown">
          <div class="card-body">
            <div class="row pb-4">
              <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body border-bottom">
                      <div class="d-md-flex align-items-center">
                        <div>
                          <h5 class="card-title fw-semibold">Team Performance</h5>
                          <p class="card-subtitle">How to Measure Team Performance</p>
                        </div>
                      </div>
                      <div class="row mt-4">
                      </div>
                      <div class="mt-4">
                        <div id="team-performance"></div>
                      </div>
                    </div>
                    <div class="p-3">
                      <div class="hstack gap-3 justify-content-center">
                        <div>
                          <span>
                            <span class="round-8 bg-primary rounded-circle d-inline-block me-2"></span>
                          </span>
                          <span class="fs-3 text-dark">Completed 124</span>
                        </div>
                        <div>
                          <span>
                            <span class="round-8 bg-danger rounded-circle d-inline-block me-2"></span>
                          </span>
                          <span class="fs-3 text-dark">Percentage 86%</span>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-8 d-flex align-items-stretch">
                <div class="w-100">
                  <div class="d-md-flex align-items-start gap-3">
                    <div>
                      <h6 class="mb-0">Product Condition</h6>
                      <div class="d-flex align-items-center gap-3">
                        <h2 class="mt-2 fw-bold">75%</h2>
                        <span class="badge bg-primary  px-2 py-1 d-flex align-items-center">
                          <i class="ti ti-chevron-down fs-4"></i>2.8% </span>
                      </div>
                    </div>
                    <div class="ms-auto">
                      <select class="form-select">
                        <option value="1">March 2023</option>
                        <option value="2">April 2023</option>
                        <option value="3">May 2023</option>
                        <option value="4">June 2023</option>
                      </select>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div id="financial"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- container-fluid over -->
  </div>

@endsection
