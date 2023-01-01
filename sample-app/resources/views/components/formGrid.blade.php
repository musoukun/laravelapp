@props([
    'gridcols' => '8',
])
{{-- gapはグリッドとフレックスボックスのアイテム間の間隔を制御します。 --}}
{{-- mbはmargin bottom　アイテムの下部の感覚を制御します。 --}}

{{-- ラベル要素を定義（Slotは親が子を知ってる状態、子は継承される側） --}}
{{-- 下の要素がSlotに書き込まれる --}}

<div {{ $attributes->merge(['class' => 'grid gap-6 mb-6 md:grid-cols-' . $gridcols]) }}>
    {{ $slot }}
</div>
