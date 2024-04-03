<div class="p-8 w-6/12 form-card bg-white rounded-xl shadow-2xl space-y-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Let's have a talk</h2>
    </div>
    <div>
        <form x-data="$store.fields" action="?action=store" method="POST">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input x-model="fromName" required type="text" id="name" name="fromName"
                       class="w-full p-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Enter your name">
            </div>
            <div class="mt-6">
                <label for="recipientEmail" class="block text-sm font-medium text-gray-700">Recipient's Email</label>
                <input x-model="recipientEmail" required type="text" id="recipientEmail" name="to"
                       class="w-full p-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Enter recipient's email">
            </div>
            <div class="mt-6">
                <label for="recipientName" class="block text-sm font-medium text-gray-700">Recipient's Name</label>
                <input x-model="recipientName" required type="text" id="recipientName" name="toName"
                       class="w-full p-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Enter recipient's name">
            </div>
            <div class="mt-6">
                <label hidden="hidden" for="subject"></label>
                <input value="Nice talk" hidden="hidden" type="text" id="subject" name="subject"
                       class="w-full p-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="">

            </div>
            <div class="mt-6">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea x-model="message" id="message" name="message"
                          class="w-full p-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                          rows="5" placeholder="Enter your message"></textarea>
            </div>
            <div class="mt-6">
                <button :disabled="!validateFields()" :class="!validateFields() ? 'disabled' : ''" id="submit"
                        type="submit"
                        class="w-full py-3 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Send
                </button>
            </div>
        </form>
    </div>
</div><div class="p-8 w-6/12 form-card bg-white rounded-xl shadow-2xl space-y-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Decode message</h2>
    </div>
    <div>
        <form onsubmit="return false">

            <div class="mt-6">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea  id="decode-message" name="message"
                          class="w-full p-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                          rows="5" placeholder="Enter encoded message"></textarea>
            </div>
            <div class="mt-6">
                <button  id="decode"
                        type="button"
                        class="w-full py-3 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Decode
                </button>
            </div>
        </form>
    </div>
</div>