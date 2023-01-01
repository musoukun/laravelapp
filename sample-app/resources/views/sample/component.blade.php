<!DOCTYPE html>
<html lang="en">

<x-header title="～画面">
</x-header>

<body>

    <div class="container">
        <div class="row">
            @isset($title)
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ $title }}</span>
            @endisset
            <div class="mr-60 col-lg-12 margin-tb">
                <form class="mr-60">

                    <x-input gridcol="8" labelsize="2" formsize="3" label="はたけやま"></x-input>
                    <x-lrinput gridcol="8" labelsize="2" formsize="3" label="はたけやま" rightlabel="" leftlabel=""
                        margin="10"></x-lrinput>


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
