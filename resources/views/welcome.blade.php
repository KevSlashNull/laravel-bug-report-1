@php
$numbers = collect([1, 2, 3]);
$numbers_mapped = $numbers->map(fn ($number) => [
    'a' => $number,
    'b' => sprintf("%s", $number),
]);
@endphp

<pre>
@json($numbers_mapped)
</pre>

<pre>
@json($numbers->map(fn ($number) => [
    'a' => $number,
    'b' => sprintf("%s", $number)
]))
</pre>

<pre>
@json($numbers->map(fn ($number) => [
    'a' => $number,
    'b' => sprintf("%s", $number),
]))
</pre>