<div class="flex justify-between gap-7">
    @foreach($here_users as $users)
        <div class="bg-gray-50 rounded-full p-3">
            {{$users['name']}}
            @if(isset($users['owner']) && $users['owner'])
                <div class="text-xs text-success p-0 m-0">owner</div>
            @endif
        </div>
    @endforeach

    {{-- PASSING DATA FROM ANOTHER COMPONENT !!! --}}
    <script>
        let rooms;
        addEventListener('rooms_for_join', ({detail}) => {
            [rooms] = detail
        })
    </script>


    <div class="bg-red-50 flex-1 p-3 rounded-badge">
        <template x-for="(value,index) in rooms" :key="index">
            <button
                    class="btn btn-success btn-xs text-white m-3"
                    x-text="value.name" @click="$wire.join_to_room('vivo_1')"
            >

            </button>
        </template>
    </div>
</div>
