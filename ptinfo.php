<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>TransNET</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ["Oxygen", "sans-serif"],
                    serif: ["Merriweather", "serif"],
                },
                extend: {
                    colors: {
                        //Define Trans flag colors
                        TPink: "#F5A9B8",
                        TBlue: "#5BCEFA",
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-slate-800 text-white">
    <!--Menu Bar-->
    <?php include "include/menu.php"; ?>
    <!--Content-->
    <div>
        PTinfo
    </div>
</body>

</html>