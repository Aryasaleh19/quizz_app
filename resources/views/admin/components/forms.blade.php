<!--  Header End -->


<div id="form" class="card">
    <div class="card-body flex flex-col gap-6">
        <h6 class="text-lg text-gray-500 font-semibold">Forms</h6>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-6">
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Email
                            address</label>
                        <input type="email" id="input-label-with-helper-text"
                            class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                            placeholder="you@site.com" aria-describedby="hs-input-helper-text">
                        <p class="text-sm  text-gray-400 opacity-75 mt-2" id="hs-input-helper-text">We'll never share
                            your email with anyone
                            else.</p>
                    </div>
                    <div class="mb-6">
                        <label for="input-label-with-helper-text"
                            class="block text-sm mb-2 text-gray-400">Password</label>
                        <input type="password" id="input-label-with-helper-text"
                            class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                            placeholder="*******" aria-describedby="hs-input-helper-text">
                    </div>
                    <div class="flex mb-4">
                        <input type="checkbox"
                            class="shrink-0 mt-0.5 border-gray-400 rounded-[4px] text-blue-600 focus:ring-blue-500 "
                            id="hs-default-checkbox">
                        <label for="hs-default-checkbox" class="text-sm text-gray-400 ms-3">Check me out</label>
                    </div>
                    <button class="btn text-base py-2.5 text-white font-medium w-fit hover:bg-blue-700">Submit</button>
                </form>
            </div>
        </div>
        <h6 class="text-lg text-gray-500 font-semibold">Disabled forms</h6>
        <div class="card">
            <div class="card-body">
                <h6 class="text-2xl text-gray-400 mb-4">Disabled fieldset example</h6>
                <form action="" class="flex flex-col gap-4">
                    <div>
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Disabled
                            input</label>
                        <input type="email" id="input-label-with-helper-text"
                            class="py-3 px-4 block w-full border-gray-200 text-sm rounded-sm  focus:border-blue-600 focus:ring-0 bg-gray-200 disabled:opacity-60  disabled:pointer-events-none disabled:shadow-xl"
                            placeholder="Disabled input" aria-describedby="hs-input-helper-text" disabled>
                    </div>
                    <div>
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Disabled
                            select
                            menu</label>
                        <select
                            class="py-3 px-4 pe-9 block w-full disabled:bg-gray-200 placeholder:opacity-40 border-gray-200 rounded-sm text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:shadow-xl disabled:opacity-60"
                            disabled>
                            <option selected>Disabled select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="flex opacity-60">
                        <input type="checkbox"
                            class="shrink-0 mt-0.5 rounded-[4px] border-gray-400 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            id="hs-disabled-checkbox" disabled>
                        <label for="hs-disabled-checkbox" class="text-sm text-gray-500 ms-3 ">Can't check this</label>
                    </div>
                    <button
                        class="btn py-2.5 text-base text-white font-medium w-fit hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        disabled>Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
