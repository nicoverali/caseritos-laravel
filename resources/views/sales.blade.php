@extends('layouts.app')

@section('body')
    @include('includes.navigation')

    <x-app-container>

        @include('includes.sm-banner')

        <h1 class="text-3xl mt-6 px-6">{{__('pages/sales.your_sales')}}</h1>

        <div class="p-6">
            <table class="w-full">
                <thead class="hidden sm:table-header-group uppercase">
                    <tr class="text-red-400 h-12 text-left">
                        <th>{{__('pages/sales.name')}}</th>
                        <th class="hidden md:table-cell">{{__('pages/sales.date')}}</th>
                        <th>{{__('pages/sales.quantity')}}</th>
                        <th>{{__('pages/sales.price')}}</th>
                        <th>{{__('pages/sales.total')}}</th>
                    </tr>
                </thead>
                <tbody class="pt-2">
                @foreach(range(0,10) as $_)
                    <tr class=" border-b border-gray-50 first:border-t">
                        <td class="py-4">
                            <div class="flex items-top sm:items-center">
                                <img class="w-24 h-24 sm:w-16 sm:h-16" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgWFRYYGBgaGBgYGhoYGhwYGBoZGBgaGhgaGBgcIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzEsISs0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NjQ0NDQ0NDU0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xAA8EAACAQIEAwYDBgUDBQEAAAABAgADEQQSITEFQVEGImFxgZETMsEUQlKhsdEHFeHw8WKCkhZDU3KiF//EABoBAAMBAQEBAAAAAAAAAAAAAAABAgMEBQb/xAAqEQACAgEDBAICAQUBAAAAAAAAAQIRAxIhMQQTQVEiYTJxsTNCgZHxFP/aAAwDAQACEQMRAD8AW3a1yLXknA9rWA75vMEHi/iWnj6GvLPT1J+Dfv2vB5yHie1Z5EzENViWqQ7TfLYakuEX+K7QO53sJW1OIOfvGVpfWKvLWKKJc2ye2OcixMjM8ZBgvLUaBtscLwZo3DgIXmgMISww3B6zrmVDbx0jSb4E2V0WDDrUyhKsLERKmIQoGa3sfWykjxmX+C3Q+0vuzoIbXSbY+SJPY6OmK0EcXEyqptoI8rTqTOZosGxGkg1nLGBjFKs0SJEokfWEqwWjAcBmb7QVP1l3XqWEy3Gql5zdTLajowLey34JiQVAl/S0E59wXElH30m3p4kEC0mDuIpxqRMDRzNIyOI4hmiZmO3hQWEKOwOE3jbvDMSwnCkdjEuYi8N42DLSJsWwMUjRt6l4qnG1sKx0Q4YEBmZQAYYMIQ7xDFU2AYE7XF/edl4PlagpUDVR+k4sZuOz/a1adMI/IWv4TbDJJuzLKnJbEvFdkjXrFi1h0EtuH9kqNE3Iuf8AVrH+EcZSr3lIjHaTjSU1AZwtzlBN9yCeW201SilZk3LgkYnB0TyWReGcOR3JA0BtM+yVUUOXzIxvcG4seh6TbcKZFQEWuYR3dsT28jGMwwTaMI8n41Li8iJhRa5M0EP0WBMkMkqPjZW0lthcWraGaRlexMkKCRWSPZByh5ZZJU4+mbaTFcYchtZ0h6VxKHiPAQ5vtMc2LWa4smnkwIxVtpZYPjzLo0uh2aXmI4OzKHlIjgkuGW8sXyQ6faG8sMNx8czEr2XTkIluzA5Xh25oNUGWP86XrBK3/pvxMENEwuBzQwMIhni0M4zcQyxlkmg4VwB8Qjumy/nKiqhVirDUGxlK0TaexFFOPU1irRSrc2ENVjoKCbngnYbOges24uFGlvMyPxDsQ4e1E3X/AFcvXnL7UqsnuRurMaYV5J4pgHoOUdbH8j5GQg1pFFWOiHmjD1wI0Gd75QdP3A0944wbE5JFpguMPRPcO/L9pOx9LEVkR3QgFjYHexA1K7gaaXkrs5wpUQVK1O7ksy5t+4CFVV/EWtrvp01jNZXo1GUOSALEanKNLrc9CLXHSbRjWxWXDKOPW1yvHgPBYxsOuSozFGvYb5W/0jkDLXg3Hyt1fMLkZcovpbb0+spcTikcEEXtqvgZXVK7M9rEWAvb0H0mjjXBxYZJzSlx5Ot4fGq4srBrAEgEEjzHKGwYzmDVnwxHe+ExA7o7z2Ouo2ttzl9R/iCiDLWouHFgcpUhvEaix8PGOKb5RvmjCL+LtGx+EIhlh4HFpWppUpm6OLg7eBBHIg3FvCKdY6Mhtcayc7yRT4uOcg1UkOr4Q1NCcUzW4bGI43kohSN5luG0RkuTYyBisbUQnKxj7i8k6TZfCEI05kMFxXEubBbjrJlXjTobOJakhUzSBYoJM7T7QKZMw/GkvqRHqQFv8OCRf5xT6w4WBw+ngXNVabgozMF1GoubTo47E4dcm/jc7yl7a4gmvS+EL1BqAoufUTT8KFavRX4l0e3S1pxxiraqzolN0mSMSqYamwQACx0HlOcHAVMSzFEJN7k2095f9o+CYvKzB86jWw0NppuyWVcMmgzZdfONxcnT2SEpKKtbs5NjMK9JyjqVMjJVykHoQfYzV9tENeuAmlvrKR+zFcMpHeW+vLaZqF7rgruqtzpPAePrWphflYDUGaKiTkuLGclwPBq7VFszIo+YjSbNOKvSX4YBfT5iZrGW9N7nO1b2Kf8AiLUUoBa73sLbxPZzsRSegtSvcuy3tewW/ICW/DcAKrl6ov0BlvxJBSpgKSFJtoCco62G9ukpJcs0gpSkoo5xU7HhWdsxKLY6C5AJ0JO2+m/PwknCilTZhTUBVW5Zl7wuRqzAE31IHU22GktsXxBlZVRs+ZVchgSq3QgX3OgYa8tJUIuWg1tXbI7NckhQWC6AaHMfQc4n9H0PT9LDHG2rbrf/AKDG1fhuKKsQM1u9Yk3te5IsLn28JSY7G3cm4Oljba3MX3iMRWzksWsQLsSbsx1NwP75dZWOwtcfnuT4SaOjI4rZ/wCRdasNMt9dLanW+lpMp0Hd6eGdQFZi765XLZO6HB1suUnTYMxlP8WzCxINzbKLkm1gB6mTcfxJnCo6fDcM3xnF87lju1yTovK9r32m0F5Z811UIxyPSNY3EZ3d6zszABEFgoOQBe81+Sraw36jnDp1TfMRY2sO9a2lr66xdSnSLMSXyANlBOpYnQt001NugkdnLMTffT35AmaM5zR9me1lXDWQguhYEqxNwuxKa2Ukny08Z1Tg3FKOJTPTcMBbMNmUkXAYcjODoNNdbdLDnp5mbL+G+OVMSyNp8VAF3tmUlgPUZ9f3ktDs6TiaR5bSN8AS3qr3IxQojnIfI7IiIwGkiYnDEy/JXYSJUYE2AiaQWQsBW+HpaQuLP8Q3l0+GEaOEBj0sVmWOGMKzCbytgVVNhKF8GL7RNNDsoczQ5c/Yh0ggBUdk6b067vWGYsoAY8rHYTbUsabnTSRUwYv5SR9njSYND7VwwtKJ2dGYIAF5S2+CYh8OISTaBGabhOZy7XuZZ4WgVFt/OWYoiNZjmCqrMeZGw6XMyySjFblRg5ukhoU7KQBrBhuHqTYkX6S1p4UWu+ngv1MI1kT5FAJ3NtT6zB5GneyX3yarFGq5f1wBOH5dyFA95U8c4iabEK1wEXTQBizFSGP3RbmJNxD1G2X3IEzfG0de863uDvqLrcg3GxF9oo5nqpJ17O3pMMXkWqv0UArLTQBfht3qasQxbOVYlgLgXQ3UHlcC0qMdWbO9y2pYEAgEkG9rC4sDbTbTTaOuArXyhu7cAkhVa41uDqANf8SDiV1BC2BF97m51Pl7TdSTPb/FsisAR3uu39eUaNC6M5IFthuSfoIbDQnx3P0jYOu5sB+o1lo48rb3K9rlhbSwzA+I/wAR6nUKIWJu1VbFQAbIrq1yepZRp0B6iR618wHp7xarlIyk2DAgne41B8rzWL2PB6j+ox/u/DAysHJbNm07umSw36knxEhZToAbW000/wAbXj9Wpc3Y6k7843UJA7up5210lWYpBsv9/wB+k0XYJb46hpm1ckC/dtTchiR0PXrM+lM2JUE5dWPTzE2X8LgwxTsB3BSIc2GhLLkF+RNmPkIm6W46OnYlmG0foLcSQUBHUQ8lhpJoVkKpZTHFprvI+IoMTpFU6TwQ2SgIoJziaVM85KxKkr3ZRIWJfMABITYeSEQ21joKgamKrFZA+zQR/wC0r1EEel+ha4+wqbi5vDep0jgojMTaKrFUFzJ3ouxCgc43iMQo7sKnWVuckGip1tFu1sCZExAshINjbSDhxAAJN2I9dZC4/UyppvpY3tbWSuAjMinfxtaccvnm/Wx1paMX7LGquYRujhguu5/Tyii+45a6/WKT9BNHji3bRkpNKhmpcyPXphlKsAVIsQeYlhEMgMTgy4ZKOc8Z4K6PnQZ0se4LqRod256m/pMviaQ53DW2PO3iec7PUwoPjKzHcApuCGQayfkj0Idff5HHHS19PTpGGPpOmYzsahuVLAnoZVVOxtjufWV3KCfUKXBz44bNmJNtCVtbVuV/CRQ/Uzor9lj5yDiex+blbylxzLycGVanZiXVWHP6+h+ngI1TOVjuRcWP7zWVOxzjYmIp9kK2zEZfC8vvR9nPpZRYWizsFS5ZzbKu56+GnXadn4ZhqdBAlJQqjpuTzLHmZluCcFagbgWuNbc/OaehTMwnkUuDWMaLnC4rL4jp+0tUIIuNpQU6ZjzKxUgMVJ5jl6S8WWtpcETjta5Lhio3IjT4pBqWEy3E8DUC3Wo7N0JsD7TP4ilXUXdHI/5T08eKE1dnl5uqywddtm8rcbpLsQZV4ntMfur76TC1eIldDceB0iFxZPOdMMGNc7nBk6vqZcbGsr8dqN94KPCQqmOZvmqN72lDTrXOuw1MYr4ssbDYTZaI8I5Gs03vJl19sX8R94JRZxDj1fRPZftnVsPxcObKDvF4ii77w8NwhUNwZPKkTwtLlyfWOvBRGg+awFpdUHCprBmPSDflGo6eAsy3FeJo7ZCuoNtRp4Swwjle7a1rWtsRKvjWFAxKWva4JXmbnXKZoaaZ+8dLWHlbTXxnHii7bb3s680lpSS2JqkZQeZG0MHrCRTax9xHAALX3On9Z1HNYROo6QAflE1M2tj77eMU5Fr3vAAA/wCYeaNkEgERSJYb33/OKgAwB5CJNJTFKf7+kJHBuBytf+/SS4xHbGmwgjTYIdJMvBfxkvGhqTIBwQ6RBwQ6Szv/AGYenSS8Q9TKr7COkWmEEssoh/DEnt0PUQhhoYw8m/DgyR6Q1EJqA5xHwBtJ5WNlJpCbg/omUVIh1OD0n+dFbzAjDdkcMfuAeVx+kuaTCN4rFZRYbzujN8xZzSxRf5JGYxPZLCodA1zyDGUfHOzChc2HU3H3b3v785slS5ud4+lOWpy9mbwY2mqRxz7FX/8AE/8AxhTsv2cdIJfdkZf+SAoYoQxWEzqYoydQckXO04oys73Giyq4gLvIOJ4lbYHxMbq6xp0vLa2BFLxLEZqik6WOpOo5nceU02GTPTDKTawLDr6dZnON0rqtt1N/Eyf2ex7AtScW7mZbm5OgzHTznnYvi3GXs68quKaNKjgi48oZHMf31kPDknbUXkxnAGk607RyMDAknoQb+BEFMXuOUSgJ1va4i6R08/0ghhX0tzvY+EO2x5frrziPh6nW8XmLC1vH+kACJysR1HXUXgIsSRuR6esKtTJ3329oFuRb2ioAxChuQDY+ENTf/EdgHBAVtCEYBiAmHBBoVhgxQaJEAMVBYu8BAiRCElxHYT05AegVNzr4yxvImL5ec0x/FiluNoI+gjSCIfFcl1m9mdEzLDlb8R+sEBjVbB0kC7sSLjXl1PSMJUy6EG3v+UeqjUmNydKXBVhZ76iCIanzGhjfxCPmHqIPYaIXGQCLXAI9DfcSlo4opVD7JlyEjcIdGHuTD7Q1AXGuuml7XA2vKyhh1I0cgZwWHMD/ANjr1nlp1Jt+2dzXxS+jpGArgkBGXKBbKDc7aSUr2Nn52tbTXpObjFVEdTStmy5x3h3h0HK9uU1+D48rBRUW1/18twZ0Rmmjmnja4NA9/W3+IaG1h0vGKeNVwcjA6bRSObb6bX356j3mvkzHlJF/1hJcesJXuMvj6GLzX8BGAKjG2n+fKE7GxOkFVrZbHyitIcgFbMSTsYEsCQDprf8AcGE3dtYbxSrYdNbRUKxqghDEk6eMdXaApfTbx8t4S2AP9+sEq2G3YcOGVAAuYhTeMBQMEEAjoQZhQ4BAA5Dx75bHxkuQuJDu+saEQmrFvAdIat0jQUDcxXxQNppYh7MekEY+0n8P5iCO2KiVjwEIG56dJDWqp8D4/vJOOUl3J6mR8vUQGOfDMbdISJb5Tbw5e0Wapt3lv4j9jE2MqsfwxKg6HkRuJl8VwDEoxak4ca6P5TdBgf66frFimDIeKMt6KU5I5zwG9NwcSjWClRUX5Rv8w9Y9jMQHXMhGdKl7Xt3ALqQNzffwtN1iOGI4F7i2ultfOVeJ7KUn3GvWw+kxfTNt+DXvJL2Z7AcQdnZ1uAUGa50DA2utpe0OM1B3s1xbbbw29L+sRguzLUCSjZlItkYkD0I23I9ZFxOBcHKabga2Yd4A2Frga23F/KZvHOL2LUoSW5b/APUDMq94IynW98rKdtRsRvL3AY/OpuO8NTlvY3+Ugmc54hjERVREdit87OhQMDa4A1J57yfhMY/wUyNYWs4BuBfNmHgbeW8SnKL3Bwi+DfUcUrpdCDzOuw6eB1j5qDbnOfU8WQ7OxcEqFurHLpaxy89PGWR48U0JL3sVsCWUf6+XUX5S1kXkzeJ+DYE3AI11sY4w7vmZQYHtJTew+Vrm4PgbEabbHeWVPGq5srqdeR2056eEtST8mbg1yTCL8t4emvOJRtgTrr+fKN7XXof0lWAsknfbe0AU6X/sRSm+ohqLwoQR6RRENjYX5wA7+cYCSIcMiC0ACtIXEh3NOUniQOKNZCBa+2u0oRTKSY6lMw0J8PT+seWUIR8KCO2ghYy4qYYMdLZjyPPyMh1cIV1YADrp9DG8fxEUVzN8twvjr4c5UYztArhEVwFzDNfe3KaaXVmXcjem9yxxCqpsdzqLRgsJP4hQDIrqNrC+9wRcH1+khASGjRMJSI9TAiMgMNU6GFgSVEXlkVWI5iSU15x2IMJCKCOqsWBGBCqYVW3APmJFq8JpspGUAHe2nK0t8oibSWk+RptcGcr9nVYkh21IOtjsCLDpy9pX4rs9UHyFTp1y6+02Xw4RpzN4YPwWs0l5Oe4jhT0j3KbWKm+UDRs17hvLS21vEm7/AA5272cnO7NvcDMxuuvI2DbdZuDTjdXCo/zKD5i9vKZS6bb4s0Wf2jGnjtWlmzuCxJYUwCcg5KrDwudSRJydpnUB6yAA/MNmXXu31IN9PK8sMR2dpM+ezKQQdG5jrffykDifZZaws1Ryt72sBc3uL2maxZVRTnifgucNxymxAzrci4tpodR6cvOWS4pbBr76E/lMZhuyppB/hv8AMpWzDTW2oI1G0kLQrU0KlCxIsWU59TuwBlvXHlEqMXwzYFtPKLAmKXi1Smyr38gFyWRrnXrbqecv8DxtHVmOyAlyNVUC+pPLY6RxmnyTKDRbqYdpA/mlLIH+ImVtQ2YWN+kkUsSHXMt7dSCPYEazROyKH5V8Vba+19ZLbGoDYm2l9jr4AdZDx1QuRkFgBqWFr36A66RoRCQ9FjrEgEk2t0/eOrlQXd0HkLmQMfi8+ijKn5t59BNEhNoZ/mo/Eff+sEi3XoIJVC1Iz/EeL1KzZjtrYch4AfWVtYM17tbxjD8QC9PSNrVD6nMF2uCfYC2s9G41SPnFGblqf+zpnYXiqvR+AxzNTGWzbsl7qR5Xt6DrLxqKX0NvP9xOMYGrUp1c6sVZSQLnW3Qjp4TdYLtepAFVSD+JdQfG24nLPE29UUeph6mKSjJ7+zTvhUvbPqfOJxNOnSYKzXLba/SVA41TJDB19/3iMVj0d1drXHPwMwaa8HapxfDLJwQbHTpFKCNjJBZXQFSGFtCJHptrYxNeirD+0su49Qf6R0Yr0hPQDfeiWSmo7zj+/CG4bEpHHWPLI2BNN7kHQddLyvxGOzOVUFQNjAC6zQZhKalj9LEyTTqhtjACfDtI6E9Y5ntqxsPEwAcZJGMj4ji6LovfPht7xWJxg+Hpo0AJAtFqBM/TrOVJDag+8kU+IuN1vAC4IXpEjDI+hUEHceUrf5q/4PziTi6zCwAQeEGrC6LIihhl7qIvQKBe8iJxZmUsy2HIeEg1Kardna55knQTIcV7SOX+HQGhOXNzJOllEEqE5GmdizjowJtfYR80EGhJ18ZnE4Hjghdcua1wCxufM20mS4l2hxtJyjgIw5atp1BjQm/J0qqiJrf1JmU7QdrkQFKNnfa4+VfM8/KYfF8SrVfnqMw6XsPYSFKM3Kyd/OsT/wCVvy/aHIFoIE2bhMEii+UMxt46Wt5cukJ6FheobW+UDl5W2kN+I4lN6Av45vaRv5iWN6isp9cs61mxPZHkvpuoTuX82w8ZiQBlRQBz01941QxpuAoJ8dfyGsdZA/ykW85MwODCjMfz6wSbez2KlKMY7rcViO7YsDe3sOXrIpTuljoAOu5kt0+I1z8o19uUa4u3dCjymkuGzKEt0vP8Cez3a6rhmy2L0ydUv3geqH6bTo+B4/QrjuOubmh0cf7TOX4DAhVzMNTtIdelqT05zleN1bPSh1K1aVwjsz2MaZVHSckpY+uu1aoo8Hb8omtxfEE6Vn9SSD6GZODR0LNFs622PRN2AlSnF6YctbTr/mYSnxeqou2VvcH6xa9oBexQ+liInFrkpZovg6XhuIU32I8jJBoruDbynNafH0HJh6H6SdR7Wqv3/cGTTKU0zd5G/G3vG6qAAs12t6mZAdtl/EnsYxX7YBtM9vJTAepGzrYtEW5IH6yix3H82iC3jreZip2gpk3JZj4g/WR37RpsEY+ghQtZrcL2hKjKV9RLKhx9D82noRObVu0DfdQep/aRH4xVb7wX/wBRr7mOhazrbceogfMJTcR7b0U0U3M5pUxDtuzHzJ/SR8o6COidZouMdsalbRQcvTYevMxHY7FA4ym1dgEFyL6Lm+7vM/TW5kj4R6QSsHko9F1MUrKChFrbzkH8QsUlSuAnzLoT9JB4bxiutM0s7AEWBJ2lXVVg9rZixHeOxuZEfi9xSm5KkJw/D3cXAsOpmu7K9hTX79Z+5yC6E+vSU3GiKeRFa3dubTp38PMUr4RQgNk7pJFrkb267wcm1aFFW6aIH/5zher/APIwTa5YUjXI17aOYcNwxq10q13yrnzhd2c73PRZtm4dh33RD6CVtTApZMo258zLLDpa0mDfk2lFEOr2Rwrf9sA9VJH6SLV7EUT8r1V/3Bh7MDNRTjs2UmuDGWOMuUY1uxdvkxDf7kU/paRH7E1L3+Mh80I/RpvLQisvvS9mT6XF6OeYjsjiOT0j/wAx9DK6r2QxN/8At+jEX/8AmdRNO8ZelB5ZPlgulxLhHK37K4kfcQ+T/wBJH/6axA1yL/ynVHw0aqYa0TySKXTwOU1uAYk7oPQxo8Brr9we86i+F52jDYUnlJ1yH2YnMW4PW/B+cabhFX8B/KdNfCxp8Kegi1sfZicz/ldUfcP5RB4fU/AfynR6uCvvGWwdto9bF2Uc8PD6n4G9oX2B/wADe06EMF4QHBxdxh2V7Od/YKh+6faOLw5/wH9JvzgRB9k8Ia2PtIwI4Y/4YR4a/wCEzfLhD00ji4Lwi1MbxowNHhbjkY+nC253m6+wAjaXfZjhCs7FwCAuxF94amxqCRy4cIbpLPhtEo6l1zAHnOh8b4ZTVgEQDraVZwXQSJb7MpRsg4ngOHxV3zZX00HIc9JsOy3CBhqXw0YsCzML8gdZU4DChXvaaHD4sIcp9DJj8VTE1RM+zN+KCMfbx+IQR/ECkxHzesk0+UEEnFwbT5JyR0QQTZGYYgMEEAERDQQQEFGWggjAYfeM1toUEQxht4l4IIgGmkepBBAAGNruYIJICoFggjAXDTeCCADyy87O/M/kIII0JjPHvmkBIUEx/uY4kinBi+UEEpiZDgggiA//2Q==" alt="">
                                <div class="ml-6 flex-grow flex flex-col">
                                    <p class="text-base font-semibold line-clamp-2">Cheescake de frutos rojos</p>
                                    <p class="sm:hidden">
                                        <span class="text-red-400">$</span>1000 <span class="ml-1 -mt-2 text-sm opacity-60 inline align-baseline">2 x $500</span>
                                    </p>
                                    <div class="mt-1 sm:hidden">
                                        <a href="#" class="p-2 w-auto rounded-md shadow-sm border border-gray-100 text-red-400 inline-block">
                                            <x-svg-s-user class="w-4 h-4 -mt-1 inline align-middle"/>
                                            See buyer
                                        </a>
                                    </div>
                                </div>
                                <p class="ml-4 sm:hidden text-sm opacity-60 mt-0.5">14d</p>
                            </div>

                        </td>
                        <td class="py-4 hidden md:table-cell">
                            13/05/2021
                        </td>
                        <td class="py-4 hidden sm:table-cell">1</td>
                        <td class="py-4 hidden sm:table-cell font-semibold"><span class="text-red-400">$</span>500</td>
                        <td class="py-4 hidden sm:table-cell font-semibold"><span class="text-red-400">$</span>2000</td>
                        <td class="hidden sm:table-cell">
                            <a href="#" class="p-2 rounded-md shadow-sm border border-gray-100 text-red-400 inline-block">
                                <x-svg-s-user class="w-4 h-4"/>
                            </a>
                        </td>
                    </tr>
                @endforeach



                </tbody>
            </table>
        </div>
    </x-app-container>

@endsection
