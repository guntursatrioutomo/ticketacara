<div class="row m-xs-b-5">
    <div class="col col-md-6 col-md-offset-3 m-xs-b-4 m-lg-b-0">
        <div class="card">
            <div class="card-section">
                <div class="m-xs-b-5">
                    <h1 class="wt-bold text-ellipsis">{{ $konser->title }}</h1>
                    <span class="wt-medium text-ellipsis">{{ $konser->subtitle }}</span>
                </div>
                <div class="m-xs-b-5">
                    <div class="media-object">
                        <div class="media-left">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="media-body p-xs-l-2">
                            <span class="wt-medium">{{ $konser->formatted_date }}</span>
                        </div>
                    </div>
                </div>
                <div class="m-xs-b-5">
                    <div class="media-object">
                        <div class="media-left">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="media-body p-xs-l-2">
                        <span class="wt-medium block">Doors at {{ $konser->formatted_start_time }}</span>
                        </div>
                    </div>
                </div>
                <div class="m-xs-b-5">
                    <div class="media-object">
                        <div class="media-left">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="media-body p-xs-l-2">
                            <span class="wt-medium block">{{ $konser->ticket_price_in_dollars }}</span>
                        </div>
                    </div>
                </div>
                <div class="text-dark-soft m-xs-b-5">
                    <div class="media-object">
                        <div class="media-left">
                            <i class="fas fa-location-arrow"></i>
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
                            <i class="fas fa-info"></i>
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