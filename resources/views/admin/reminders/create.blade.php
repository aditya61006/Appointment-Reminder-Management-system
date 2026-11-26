@extends('admin.layouts.app')

@section('content')

    <h2>Create Reminder</h2>

    <div class="card p-4 shadow-sm">

        <form action="#" method="">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label">Select Appointment</label>

                <select name="appointment_id" class="form-select" required>
                    <option value="">Choose Appointment</option>

                    @foreach($appointments as $appointment)
                        <option value="{{ $appointment->id }}">
                            {{ $appointment->customer_name }}
                            - {{ $appointment->appointment_date }}
                            {{ $appointment->appointment_time }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Reminder Date & Time</label>

                <input type="datetime-local" name="reminder_at" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Reminder Message</label>

                <textarea name="message" class="form-control" rows="3" placeholder="Enter reminder message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Save Reminder
            </button>

            <a href="{{ route('admin.reminders.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

@endsection
