@props(['head', 'body'])
<table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
        {{ $head }}
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        {{ $body }}
    </tbody>
</table>
