@extends('admin.layouts.app')
@section('content')
    <div class="accordion" id="accordionExample">
        @forelse ($logs as $info)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $info->id }}"><button class="accordion-button" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $info->id }}" aria-expanded="true"
                        aria-controls="collapse{{ $info->id }}">
                        <span role="img" aria-label="Emoji">🏷️ {{ $info->user->name }} {{ $info->description }} <br>
                            <span style="font-size:12px;margin-left:26px;color:#7b7b7b" class="text-waring"> <i class="far fa-clock"></i> {{ Carbon\Carbon::parse($info->created_at)->format('d M y, h:m:s')  }} </span>
                        </span>
                       </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse{{ $info->id }}"
                    aria-labelledby="heading{{ $info->id }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="accordion-body">
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">Action/Model</th>
                                      <th scope="col">Url</th>
                                      <th scope="col">Old Properties</th>
                                      <th scope="col">New Properties</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td>{{ $info->action ?? '' }} {{ $info->modal ?? '' }}</td>
                                        <td>{{ $info->url ?? '' }}</td>
                                        <td>
                                            @php
                                                $oldProperties = json_decode($info->old_properties, true); // Decode JSON
                                            @endphp
                                            @if($oldProperties)
                                                <ul>
                                                    @foreach($oldProperties as $key => $oldValue)
                                                        <li>
                                                            <strong>{{ $key }}</strong>:
                                                            @if(is_array($oldValue) || is_object($oldValue))
                                                                {{ json_encode($oldValue, JSON_PRETTY_PRINT) }}
                                                            @elseif($key == 'updated_at' || $key == 'created_at')
                                                                {{ \Carbon\Carbon::parse($oldValue)->format('Y-m-d H:i:s') }}
                                                            @else
                                                                {{ $oldValue ?? 'N/A' }}
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <em>Null</em>
                                            @endif
                                        </td>
                                        <td>
                                            @php
                                                $newProperties = json_decode($info->new_properties, true); // Decode JSON
                                            @endphp
                                            @if($newProperties)
                                                <ul>
                                                    @foreach($newProperties as $key => $newValue)
                                                        @php
                                                            $oldValue = $oldProperties[$key] ?? null; // Get the old value for comparison
                                                            $hasChanged = $oldValue != $newValue; // Check if the value has changed
                                                        @endphp
                                                        <li>
                                                            <strong>{{ $key }}</strong>:
                                                            @if($hasChanged)
                                                                <span style="background-color: yellow; padding: 2px; border-radius: 3px;"> <!-- Highlight changes in yellow -->
                                                                    @if(is_array($newValue) || is_object($newValue))
                                                                        {{ json_encode($newValue, JSON_PRETTY_PRINT) }}
                                                                    @elseif($key == 'updated_at' || $key == 'created_at')
                                                                        {{ \Carbon\Carbon::parse($newValue)->format('Y-m-d H:i:s') }}
                                                                    @else
                                                                        {{ $newValue ?? 'N/A' }}
                                                                    @endif
                                                                </span>
                                                            @else
                                                                @if(is_array($newValue) || is_object($newValue))
                                                                    {{ json_encode($newValue, JSON_PRETTY_PRINT) }}
                                                                @elseif($key == 'updated_at' || $key == 'created_at')
                                                                    {{ \Carbon\Carbon::parse($newValue)->format('Y-m-d H:i:s') }}
                                                                @else
                                                                    {{ $newValue ?? 'N/A' }}
                                                                @endif
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <em>Null</em>
                                            @endif
                                        </td>

                                    </tr>

                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse

    </div>
    
@endsection
