@@ -0,0 +1,83 @@
<div class="row m-xs-b-5">
    <div class="col col-md-10 col-md-offset-1 m-xs-b-4 m-lg-b-0">
        <div class="card flex">
            <div class="row flex-fit">
                <div class="col col-lg-6 hidden-md-down p-xs-0 p-xs-l-4">
                    <div class="card-section">
                        <img src="{{ $konser->posterUrl() }}" class="img-fit" alt="">
                    </div>
                </div>
                <div class="col col-xs-12 col-lg-6">
                    <div class="card-section">
                        <div class="m-xs-b-5">
                            <h1 class="wt-bold text-ellipsis">{{ $konser->title }}</h1>
                            <span class="wt-medium text-ellipsis">{{ $konser->subtitle }}</span>
                        </div>
                        <div class="m-xs-b-5">
                            <div class="media-object">
                                <div class="media-left">
                                    @icon('calendar')
                                </div>
                                <div class="media-body p-xs-l-2">
                                    <span class="wt-medium">{{ $konser->formatted_date }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-xs-b-5">
                            <div class="media-object">
                                <div class="media-left">
                                    @icon('time')
                                </div>
                                <div class="media-body p-xs-l-2">
                                    <span class="wt-medium block">Doors at {{ $konser->formatted_start_time }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-xs-b-5">
                            <div class="media-object">
                                <div class="media-left">
                                    @icon('currency-dollar')
                                </div>
                                <div class="media-body p-xs-l-2">
                                    <span class="wt-medium block">{{ $konser->ticket_price_in_dollars }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-dark-soft m-xs-b-5">
                            <div class="media-object">
                                <div class="media-left">
                                    @icon('location')
                                </div>
                                <div class="media-body p-xs-l-2">
                                    <h3 class="text-base wt-medium text-dark">{{ $konser->venue }}</h3>
                                    {{ $konser->venue_address }}<br>
                                    {{ $konser->city }}, {{ $konser->state }} {{ $konser->zip }}
                                </div>
                            </div>
                        </div>
                        <div class="text-dark-soft">
                            <div class="media-object">
                                <div class="media-left">
                                    @icon('information-solid')
                                </div>
                                <div class="media-body p-xs-l-2">
                                    <h3 class="text-base wt-medium text-dark">Additional Information</h3>
                                    <p>{{ $konser->additional_information}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t">
                        <div class="card-section">
                            <ticket-checkout
                            :concert-id="{{ $konser->id }}"
                            concert-title="{{ $konser->title }}"
                            :price="{{ $konser->ticket_price }}"
                            ></ticket-checkout>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 