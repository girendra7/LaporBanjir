@props(['type' => 'success', 'message' => ''])

<div style="padding:12px; border:1px solid {{ $type === 'error' ? 'red' : 'green' }}; background:{{ $type === 'error' ? '#ffeaea' : '#eaffea' }}; border-radius:6px; margin:10px 0;">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>
