@props(['name','type'=>'text','value'=>''])

<x-form.input-wrapper :name="$name">
                    <label
                        for="title"
                        class="form-label mb-2 mt-1"
                    >{{ ucwords($name) }}</label>
                    <input
                        id="{{$name}}"
                        type="{{$type}}"
                        class="form-control"
                        name="{{$name}}"
                        value="{{old($name,$value)}}"
                    >
                    <x-error :name="$name"/>
</x-form.input-wrapper>