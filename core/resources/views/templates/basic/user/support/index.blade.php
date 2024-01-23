@extends($activeTemplate.'layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table custom--table">
                <thead>
                    <tr>
                        <th>@lang('Chủ đề')</th>
                        <th>@lang('Trạng thái')</th>
                        <th>@lang('Ưu tiên')</th>
                        <th>@lang('Câu trả lời cuối cùng')</th>
                        <th>@lang('Hành động')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($supports as $support)
                        <tr>
                            <td> <a href="{{ route('ticket.view', $support->ticket) }}" class="fw-bold"> [@lang('Ticket')#{{ $support->ticket }}] {{ __($support->subject) }} </a></td>
                            <td>
                                @php echo $support->statusBadge; @endphp
                            </td>
                            <td>
                                @if($support->priority == Status::PRIORITY_LOW)
                                    <span class="badge badge--dark">@lang('Low')</span>
                                @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                    <span class="badge  badge--warning">@lang('Medium')</span>
                                @elseif($support->priority == Status::PRIORITY_HIGH)
                                    <span class="badge badge--danger">@lang('High')</span>
                                @endif
                            </td>
                            <td>{{ diffForHumans($support->last_reply) }} </td>
                            <td>
                                <a href="{{ route('ticket.view', $support->ticket) }}" class="btn btn--base btn--sm">
                                    <i class="fa fa-desktop"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{ paginateLinks($supports) }}
</div>
@endsection


