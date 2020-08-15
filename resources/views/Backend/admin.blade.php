<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Admin Dashboard</title>
  </head>
  <style>
      body {
  font-family: 'Montserrat', sans-serif;
  background-color: #eee;
}

/* navbar */
.sidebar {
  height: 100vh;
  background:#333;
  box-shadow: 5px 7px 25px #999;
}

.bottom-border {
  border-bottom: 1px groove #eee;
}

.sidebar-link {
  transition: all .4s;
}

.sidebar-link:hover {
  background-color: #444;
  border-radius: 5px;
}

/* .current {
  background-color: #f44336;
  border-radius: 7px;
  box-shadow: 2px 5px 10px #111;
  transition: all .3s;
} */

/* .current:hover {
  background-color: #f66436;
  border-radius: 7px;
  box-shadow: 2px 5px 20px #111;
  transform: translateY(-1px);
} */

.search-input {
  background: transparent;
  border: none;
  border-radius: 0;
  border-bottom: 2px solid #999;
  transition: all .4s;
}

.search-input:focus {
  background: transparent;
  box-shadow: none;
  border-bottom: 2px solid #dc3545;
}

.search-button {
  border-radius: 50%;
  padding: 10px 16px;
  transition: all .4s;
}

.search-button:hover {
  background-color: #eee;
  transform: translateY(-1px);
}

.icon-parent {
  position: relative;
}

.icon-bullet::after {
  content: "";
  position: absolute;
  top: 7px;
  left: 15px;
  height: 12px;
  width: 12px;
  background-color: #f44336;
  border-radius: 50%;
}

@media (max-width: 768px) {
  .sidebar {
    position: static;
    height: auto;
  }

  .top-navbar {
    position: static;
  }
}
/* end of navbar */

  </style>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">MarTaLe</a>
              <div class="bottom-border pb-3">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTExMVFRUXFxcYFxcWFRgdFxoXFxcXGBoYFxcYHSggGholHRcdITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGisfHR8tKy0tLS0tLS0tKy0tLS0tLS0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstKystLf/AABEIAOMA3gMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAUGBwj/xAA6EAABAwEGAwUHAwQBBQAAAAABAAIRAwQFEiExQQZRYRMicYGRMkKhscHR8FJi4QcUI3LxFjNDgsL/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAJxEAAgIDAAICAQQDAQAAAAAAAAECEQMhMQQSQVEyBRQiYTNCsRP/2gAMAwEAAhEDEQA/ANVwUYRiFGEFEITQpxkkAkUMxSITQkAgBwFIBJIoGPCePyUoSQBEhM4qZUHAIAE90LBv++mUWnPPYTmfsFu12gCTtsvI+ILTjtFSJwhxDQdgD9wpuynFpWCvG8H1XFzj4DYDoqRKTiuy4V4ZwgWiuNM6dN237n9eQ8026FGLk9HFlJbnFbQ60vLRAIB8YGZPXJY5plCdiaoHKaVMsUHNhMRJpTFNKcoAikkkgBJBJKUAOmSSQB705RKjKiXJiCBPKBjCkXpDJlyUoeKUwKBhfBIzsoGsOfxUe3bzHqiwChx3Uw5V3Wtg1cPVSs9oa90NMneNkrQVYbCShu3B/PutFtKAub4qvZtFhM56AbkrKbcjohFRVsx+K75FFuFp7x0+684L5M6k/NWbZaH1nyZc5xgAST0DR9F6DwfwcKUVq4Bq6tbqKfXq/rttzVaiiG3NmZwnwuBFW0DvH2WHRvVw59NoXS2lhc4U2nXWdGtGpMbfwrl4BtMTmXOMBo1J2ACaxWcspuLs6js3HYcmzyHzlZJtvZ0KKitHnPFNjwWkjEXAgQYz6jJZraevSVq8QVAa8DPDqeZ+yp0afdceZA+C0T0YNbACy91uWZzVOvTj1XSV6e4GjD6rGt1OMuQRGWxShozXBNCm9qi4LUxGTJ0igCKcJQmQAglCeE4QB6S7ixnIoLuKhyK5OEyAOndxSeSG/il/Jc2JUsB6pDNupxNV6Ku7iCufehZvYO5FEbZXckAGde9Y++g1Lwqn3z6qYsTuSkLvckBWdaah1efVeq8J3f2VnYD7ThieTricJ+AgeS4C6bk7StTYdC4Yv9Rm74Ar1ynoSol9G2JfJn31eDaNNznHTNeSXta6lqqyAS5xwsYPzzJ6LueMqvaRSGecnyOX50VjhnhdtEdo/wD7hER+kHbxO/olaRUk26+ClwlwsyzxUqQ+r+r3WZZhk783b9F1dorimM8ycg0ak8gFGu8UxzJ0aNSeQUrFZTPaVM3kZDZo5N+pUW7NEkuFGzWJ+PtambtA2cmA7DrzP4anFF5toUXEnvaDxW5brW2k0ueQABJJ0gLzG30a141XOYCabJhunmf3Hkmo7FKRz7HE4qjt1p0afcbO7j5+0foqdpAADRr1H5+ArTotl1Ng2aSfE5AfD4qmzNLZddRyceYMHwEfnksG9R3j5f8AC7J9jgR0jp0XLXyz5D7/AJ4KYvZc1o59+vmokIjh9VF4W9nKCTpJJiEop3KKAEkknlAHcm7m7NPoiC6yfcXbGzNGwSFEckqYzjqd0n9HwR23G6NF1mAKUBKhnLNuF3RGp3Aea6OEgj1Aw23ENyjsuNu5WukihgrouljH4gMwD8clbva3NpUy4lWKXcZJ1Ofkst91f3Tgagii05gz3yNv9eZWUnvRvjWihwpY31XOtVSYcf8AG3mAcn/b1XQ2iuGdXHJo5/n0Viu5tNhOTWtHhAGgHIQqdioOP+R/tO0H6WnbxORPkNki+kaNEzidm7c/RvT5q094Y0ucQIEydgEYMAzK8+/qDe7qjm2KjLnuILw3kdGeep6BNRJlIzeIb0q3hWFGjPZA+To949OQ/B2NisFOy2QtAgBri52hkgyZ5/KFHha4P7ZgBALj7R+3RA4xtBc3sGZT7X+o28/oUKQ6o8os2oJn1zW/dN4U2OJcYkt22nmovupmc69PooU7ic5stOfIjrsU7TM6cTtmV6b2y1wPmuVv+nBd5nyOf1hZNW7rTSzwu8QD9FXfeL4hxnnKFD6Bz+yo7QeP2TVfoE2PZPVWhiBTNSSCokZwTFIpggB5SlMnAQB709RDUiU8IGMWp4UgFIIAHClCcJSgYsKnRpS4BQhaFjpQMR1Ongk2NdDikDqJRnhDdlkmcC7LbdYm5QrMNV4H/jYZP7nDb/UfwtFtPdTpUumSBe9bs6ZIzccgNyTsFSXyF/BgcT38aUUqIx135MZy2xO5AfRVOFOGW0HGrUPaWh+b6h5nUN/M/gtG5LjwF1Wp3q1T2nchsxvID4rb7IMHIDNT0dJFa31gxk67Abk8guSttKAXOkk6ldFnVdjI7o9kfXxWVe9IwcuiUuFI4m12iDnzV2wX1SaADA/9/lkqVuscvB1HI6dULjJzHUqLmMyaC10Oya6RmWxoQI1yI6wiEUxZJOJ1VG8WOAjKdNIPmMlncQ3dTqU3OwgOAkEDPLwXFXVaqoJFMFwg4xqI8PX1XQ2C8TVYWzMDQnMdE3FxIU1I5GszC6PP1TOdPorF504cqnRarhg9McjJM1WLVTggdB6QFWITQmiJTJymTEJTpUy7IKC6Hh27w5pcYz08EAer4k4chYkpQMPiSxIIcpYkWFEy5OHIZKUpWMsUmSQOa1m9NtFn3eM55fMrSjKAokzSCIjNTYVHCpU27qTQPjgKuaWJwc7MjIdPBWKco4Ymk2TdAuzgLCt1p7V/ZtPcB7x5kbTyC072rQMAMF2QjWNz9PMKvZbC0DKMkS+kVD7ZJrcohZ1uoK+14BhDtgkyFMtouPTmLXdYJmPgq7rlBnJdKKaKyiFKKkzkTcIDSGsj5eiof9PFrscAO3I3jn+bBeh06IKDarNCrdGejyq/roIaXR4+K5ag2Xt/2A+K9gvizBzHA7heT1qeB5/a8ekpwl8GeSO7DXoyHjwPwJCziVpXw/vDPb5rLIWkeGc+kZSSKUKiB2NkgdV3lyWYNpNMwen50XGWEQcXJallvlzJA01/JSsKPTWVQVLEs6jUGLJXGuSsoM1yI1yrypdogZYxJ2qv2q0rqsxd3zpt1PPyRYJWaVipYWidfr/COBl4qeFO1qjprwGAjspojKSK0JpCcgTWQhWu1Cm0vcQ0NBJJOQA1KtVHZTkvLP6kcRY3/wBqwnCCDVI3OzPAanrA5qnUSY22V3cZvrWl7g0mn7LDuGg6kdTn6LbsfFTGPGLEG/qgwPHp1WPdVib2bRTAl2snNdO26GOp4SFg9s6qpbNeoWObibuOeXl0WdZ65cPHPyQ7HdT2NwB/c00zA5TOSussuEj80TdsFSEAphTFNOQnQm0DbWhRr1ZUXiFWqFJsWijeLsl5dfVHvv6/n0C9GvWrl6rgL4PeKUOkz4Y1aoXRz+yX9oSp2Znfz3mPHl8FbLcTeoyK1bowUb6BbdwyOo5qdGi1r4IyKt3Y/MNOYTMgOJOg0J+6lyZooox6sBx6Ej4qLSouMk+MpwVqYM9XpsDc0UPWUbe3mgVb3aN0tFUzd7RO165l9+jZXbiqVLVVFNmQ1c7ZrZzPjsOqXsh+rOquuwmqZPsjU8+gXTU2AZAD80Q7NQDWhrRDRkP55q6yml0paBtZzRWsUw1FIVpCbBgwouchVnLkOLeMqdlBY2H1iJDdm8i/kOmp+KG6ElZq8UXq6lRd2cY4yOw6rxOt2peSRiOIz1M55rseE7ydaRaBVOJxLHyeoIgch3RkqltsRY8vaJBgnmDv4rnlPezoxwTKVgvXAAMweR1Xf8KX02u3CTDx8VxVGm2p7QEo7Lrex3aUasOHuk5euyE11HVLHJr7PUhCT2Ll7q4jLyKdVpZU0PI9Qd10bKqu0clNEi1AeivcgvegAFYqnXerD1RtT/VZyKRh3s6ZXF3hBfnz/wCF117OXI2sicR0HRERSKVosxkbGJ+2anZqZOUxOv55K/a8D/ZOmeXxWbQqtDiXeOX50+K0TtGdUy/RaGgwdszsAsW22nGcsmjIBFtVsxd0DC3lz6lUiqjH7InO9IinBUU4WhkaLrY7mVDtyU1joPqPbTptL3vIa1rdS47fmit35c9ayVOzrtwmJBmWuHNrtDGh5LLSdGtsBZqdSq9tNgxPcQGtGpJ+m88hK9u4UuFtkohg7zznUf8AqdyH7RoPXUrD/p1wz2DO3qj/ACvHdBHsMPj7x35DLmu7psTGToMVoNgKFNqkVaRLZAuQ31VGu8ASsO2WkuMDRc/keTDBG336Lx43Nlm9bScBFMgPIIBIkA843Xjd88P2qnUJeHVS8kl4zxHmV6qTknadjovGf6pk97rX0d37WPqcFwNd9alWcX03Na6mRJHvBzSPhK6a9rs3B1C2iICp16sGCu3x/KjmT9umTxej0cwblqAzEjpqtGw3UN8XqumsRBRX2QajJdagJ5GtGe+xMIGUEaHKVbpOgQU7qUIcQqIsMaiG96CXobqwScgJVakaLOtTskS0WoLEt1tkEBZuRVGZe9eTHquRvO0S7CNB81uXpXwtcd1yzvitca+THI/gbZMTukSmhbGIyg9ScmcUxMGpNKiUvz8hMR7r/Tzgn+yBrV8JrvEADMUmnUA7uO56QNyef4t4lq0bU+zV6dNzG1Mbe7PdJxMd3pExGkZgr1d7eS5PjzgsW4Nq03BtdjcMu9l7ZJDXbggkwep8vIjOMsl5Dr2l/EPcF8UrQwOpvDv1fqB5OBzC36YlfPVhttosNoJHcqtOFzXDIjIwRuOoXtvB9/U7bR7RmRacL2HVromOo3BXpx/oxs6DZBqPjNEJWZeVQ4XYeX8pZsscUHKXwEIOcqQK3kuB1j5rMY3OFp0X4mh3MKoacOXyufLLLL3kerCKgqRANSe2FYwoddmSwaLTJtaCNFmcRODRShoJc4N65ytOggXtQnsnfpf85C6PH1NESKFNr6ecS1XadvB3RJQHgToD5L34txWjkasm+2t5hVqtvG2aVYZfZUHlP3bF6pE61sJ0CoVrRUO8BWZQqgSasZmVy46kqpUb19VpV2KhaqkBFBZzt9tlYbmwuivFstPVVqV342SdZjw8FqsigtmMoOTMNIo9qs5Yc/VAW6d7Ri1REqDypkKLjkqJYNO1MkmI+sKZlEDFUpmFcYZXhw2dktHFcf8ABzLXTdVpiLQ0ZEe+B7rvovKLhvGvYqnaU3EOBipTOTXAE91489dl9HBi86/qRwa17H2mjLagBLo0cI5bldOHK8epc/4RKPvzp0d03yy1UGVacw8HI6tIycD1BHyR6jMoWJZbGyxsIpMwQMhEB8gYS7OXOOQnnOa3JkSRB5cjyXP+ozk2k+G+CNbM6635YTs4hHq0u/PRVbsHfPiVp1huvHhuJ2T0ynUOYSrDJQtJ0PVWH+yjtiKtm1VmvTxNcPMIdnZzVkZKoa2KRkdqgvqKlf1Y2esCR/iqaHk7cfVSFcESCvdxT94pnO1Qd71WeFAWiEziDmFaEyJMKBaptYg2mpAWhDK9qdAWTWzR6tTEeii8pUNGda6Mg+qsXTQmjMe0T80C1EvcKbfacY8OZW/TswptDB7oy+q4vMyqKUfk1xR3ZgW27mubhOu0rm7fdjqeeo6LtuzxPhGq2AEfwpw+Y8emGTApcPMyouGS6S+LiLSSzLpt5LnKjSMjkvXxZY5FcWefODi6YJOCmSAWxkfWXZhFpBRlFYF5EUrOpsnCrW6zdo3Dpvl0VoJLSUU1TJTado8k/qnetosxZRa1vYvY7A+MwTLXsB5gGQf3FbfAt5G0WKk5xlzQWOMyZYcIJ6kAHzW9xxw8y3WV1IwHjv03H3ag0noZLT0JWBwfdbrLZmUngB+b3DLIu2kawABK5/LnF4kn1M2w+zl/RcseVTzK1a4yWRZH98rZOYXj4OM7cvUZdq9k9IKt0hLQgPb3SOild7u6El+Qf6kiYRCVGsyY6GfFDfU6+RH1TuhrYK2WRlekab8wfUHmOq4oWStZXmnUBLPddsR913FDLIeMfZGqAEZgEciunx/JeP8AtEzhZ5/Wto3RrHXDjqtW9eGaRBex5pjUyJAXK2O6bZTq4jReRtEQRtuvUh5OKfGYuDR01QhoXPXha84BWjbLLa3t7tF3mWj6rL/6WtjtezZPN0n4BX+4xLskT6P6K4rgboHavquwUmlzumg8Tst+xcFtBmtVL/2tED11XQULKyk3DTYGjoPyVyZv1GEfw2zSGFvpj3PcgoDE44qjtTsOgU7YJBlajgsy3nZeV/6SyT9pdOiklSKFiZJlWKhhNQpwE7mrRu2JgasEFYd7XIyo3LI7Fb1TIKqQt8OSUHcWZTipKmebWuxupuwuEfLyKAvRrbYm1Gw8SFg2jh1s92R5r2cXnQkv5aZwz8aSf8T6NaEdqGpGpCwjSE9hCYzKoVbxbHd72cSCq9orl2py5LOo04BZyMhcefy5JpRN8WBNWyy28muLmZ4hrP8ACoVamZWWyvFpdtiRq1aXFcGTLKXTqjjUeDWd3+RbrCucY/vrfoPyWeF7ZeX4AVspQLGdQrNoVIZFE9SFHhotKG9oIgpqblJxV9EUGPLThOY2nX1RalqDRJ8p1/lAtftAprRSxDNY20aBm0sbYcTnBy+SmavIjzyVRteMLM+9IEdBJRuzByg+qqwomXP/AG+qg6eY9U4otHuhCrgD3AVDGJrTnpKEfBSLR+lQcpGQesi3Ml5Wq7VULS7Mq4dEwEQIQ3HNO6oh0jJW6RDGrhBDUWqCdNhJ8Jj6oRMLWPCOsi9qrvarBKYUcWuitOgo9g7Q8lC0vgRzRXvHkFn1qkmV15J0jijGwO8KNQd6U1R2cpOOS4JnTE5S9jgrTyPzUrHVLwSsniy2RaC3kM/FXbgdNPzWc8bUfY2T0Wg/vLfsj8guYdU73mt+xVMllDTHLheqKhaBBV0uVW26Sqy8sUCdJ6KCqVnqAg9FYpv81MZaG0VLwEKbXy3yTXgMlWq1sLD4KH0pcA2d+K0AbMYfVxH0C0mnM+Kx7hMvqu/1H1+q05VSGyy4oFTNOXZJnOUiIFAqFEe5VnPSBCJWdadSrpKz7SdVeNbFIp1HZqbSq4MlFxrqozsK0gh/QTMjTIaROp5qm8otN8hw0MEkk6iW5RvzVdxlaVoQRgkwrOmSHRgZodR8lQ9su6PV7eYEKkCnSW+XpyR4CqKBSSXNI1ieY346bRUn9R+C3eF/+0fH7JJLbN/jRSE898roLDoPJJJcfyavhofZU7ee4fEJJIn+JMOla7jmRtAV6oIhJJZLhowdXZZNuP8AjcP3BJJJdGhuHz3an+3/AMhaCSSuf5AxPy+KhTeUySkRCqq0pJIGh3arMtRSSWmPpMjOp6/nREJSSXWzIegP8dU790eRJnLfRAoapJK3wF0I4/JAJSSSjwD/2Q==" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white">Admin</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>Orders</a></li>
                <li class="nav-item" id="news"><a href="/news" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>News</a></li>
                <li class="nav-item"><a href="/time" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-time text-light fa-lg mr-3"></i>Time</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chair text-light fa-lg mr-3"></i>Seats</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Charts</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>Documentation</a></li>
               <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Account</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  {{-- <h4 class="text-light text-uppercase mb-0">/////////</h4> --}}
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
            <!-- end of top-nav -->

          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <div class="container">
        @yield('content')
    </div>

  </body>
</html>






