<?php

    $pageTitle = "Admin's Page - Mybank";
    $pageDescription = "Banking System";
    $pageKeywords = "Banks - Agencies - Atm's - Users - Accounts";
    $pageAuthor = "Amiul";

    $IndexCssPath = "../../../../Assets/Css/Index.css";

    include("../../../Layouts/Head.php");
?>

<body>
    
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 ">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="Banks.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Bank</a>
                            <a href="Agencies.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Agency</a>
                            <a href="Atms.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Atm</a>
                            <a href="Address.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Address</a>
                            <a href="Users.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">User</a>
                            <a href="Accounts.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Account</a>
                            <a href="Transactions.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Transaction</a>
                            <a href="Roles.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Role</a>
                            <a href="Permitions.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Permition</a>
                        </div>
                    </div>
                </div>
                <a href="Permitions.php?logout" class="text-red-600 hover:bg-gray-300 hover:text-red rounded-md px-3 py-2 text-sm font-medium">Log Out</a>
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-7xl mt-12 pl-8 pr-2">

        <div class="relative flex h-16 items-center justify-between mb-5">
            <h1 class="text-2xl font-extrabold dark:text-white" >/ Admin / Data / Permition</h1>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >Add New Permition</button>
        </div>

        <table id="example" class="table table-striped" style="width:100%" >
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Logo</td>
                    <td>name</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js" ></script>
    <script>
        new DataTable('#example');
    </script>


</body>
<?php include("../../../Layouts/End.php") ?>