

                @forelse ($clients as $info)
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
                        <td>{{ Carbon\Carbon::parse($info->hearing_date)->format('D, d M Y') ?? '' }}</td>
                        <td>{{ $info->lawyer->name ?? '' }}</td>
                        <td>{{ $info->createdBy->name ?? '--' }}</td>
                        <td>{{ $info->created_at->format('d M y') }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown">
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
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No records found</td>
                    </tr>
                @endforelse

