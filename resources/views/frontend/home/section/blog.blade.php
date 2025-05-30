<section id="blog">
    <div class="container">
        <div class="section-heading">
            <span class="alt-font">Recent Article</span>
            <h2>Our Lawyer has been good friend of mine for long time</h2>
        </div>
        <div class="row mt-n1-9">
            @forelse (blogs() as $info)
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <article class="card card-style3 position-relative border-0 rounded-0 bg-transparent h-100">
                        <div class="card-img"><img src="{{ asset($info->image) }}" alt="...">
                            <div class="tags">
                                <a href="void:javascript()">{{ asset($info->service->name ?? '') }}</a>
                                {{-- <a href="void:javascript()">Fraud case</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-3">
                                <li class="d-inline-block me-3"><a href="void:javascript()"><i
                                            class="far fa-calendar-check me-1 text-primary"></i> {{ Carbon\Carbon::parse($info->created_at)->format('M. d, Y') }}</a></li>
                                <li class="d-inline-block"><a href="void:javascript()"><i
                                            class="far fa-comment-dots me-1 text-primary"></i> {{ random_int(0,100) }} Comment</a></li>
                            </ul>
                            <h3 class="mb-3 h4"><a href="void:javascript()">{{$info->title ??''}}</a></h3>
                            <p>{{strip_tags($info->details)}}</p>
                            <a href="{{ route('blog.details',$info->slug) }}" class="font-weight-500">Read more<i
                                    class="fas fa-long-arrow-alt-right align-middle ms-2 display-30"></i></a>
                        </div>
                    </article>
                </div>
            @empty
            @endforelse


        </div>
    </div>
</section>
