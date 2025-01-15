

                @forelse ($clients as $info)
                @if ($info->status == 2 || $info->is_secrate == 1)

                @else
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                data-bulk-select-row="{{ json_encode(['id' => $info->id, 'name' => $info->name]) }}" />
                        </div>
                    </td>
                    <td>{{ $info->case_number }}</td>
                    <td><a href="{{ route('clients.show', $info->id) }}">{!! str_ireplace(
                        request()->search,
                        "<span style='background-color: yellow;'>" . request()->search . '</span>',
                        $info->name,
                    ) !!}</a> </td>
                    <td>{!! str_ireplace(
                        request()->search,
                        "<span style='background-color: yellow;'>" . request()->search . '</span>',
                        $info->phone,
                    ) !!}</td>
                    <td>{{ $info->lawyer->name ?? '' }}</td>
                    <td>{{ $info->createdBy->name ?? '--' }}</td>
                    {{-- <td>{{ $info->created_at->format('d M y') }}</td> --}}
                    <td>{{ $info->last_update ?? '...' }}</td>
                    <td class="text-center">{{$info->hearing_date ? Carbon\Carbon::parse($info->hearing_date)->format('D, d M Y') : 'NULL' }}</td>
                    <td>
                        <div class="dropdown">

                            @include('admin.client.include.quice-view-modal')

                            <button class="btn btn-link bg-info dropdown-toggle float-right mt-1" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <a href="{{ route('clients.edit', $info->id) }}"
                                    class="dropdown-item text-info">Edit</a>
                                <a class="dropdown-item text-success"
                                    href="{{ route('clients.show', $info->id) }}">Details</a>

                                <a href="#"
                                    onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'Client', 'id' => $info->id]) }}')"
                                    class="dropdown-item text-danger">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

                @endif

                @empty
                    <tr>
                        <td colspan="8" class="text-center">No records found</td>
                    </tr>
                @endforelse

