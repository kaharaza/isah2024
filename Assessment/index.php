<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Certificate and Evaluation form</title>
    <?php include_once './../inc/cdn.php';
    include_once './../inc/meta.php';
    ?>
    <link rel="stylesheet" href="./css/ass.style.css">
</head>

<body>
    <div class="bg-assessment">
        <div class="box-signin">
            <div class="container ">
                <img src="https://isah2024.vet.cmu.ac.th/isahcmu/image/logo_2.png" class="img-size" alt="">
                <div class="mb-3 h5 text-white" id="text-remak">To receive your certification, please complete the evaluation form below.</div>
                <div class="mb-3 h5 text-white" id="text-remak-final" style="display: none;">Thank you for taking the time to complete the evaluation form, Your feedback is invaluable and helps us to improve future conferences.</div>
                <div id="open">
                    <div class="d-flex justify-content-center align-items-center ma-customer">
                        <button onclick="inputChange(0)" class="btn btn-open">Open evaluation form</button>
                    </div>
                </div>
                <div id="openDownload" class="mb-2"></div>
                <div id="userId" style="display: none;">
                    <form class="text-start" id="myForm">
                        <label class="h5 text-white" for="userId">Please enter your ID.</label>
                        <div class="input-group">
                            <span class="input-group-text">ISAH</span>
                            <input type="text" class="form-control" placeholder="999" id="numberId" required>
                        </div>

                        <div class="container-scroll-smooth">
                            <div class="card mt-2">
                                <div class="card-body mb-2">
                                    <label for=""><b>Question 1:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum molestias consequatur accusamus, nihil soluta sunt optio porro nobis dignissimos aperiam rerum aliquam neque dolores laudantium quia veritatis! Adipisci, eveniet!</label>
                                    <div class="box-evaluation mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-1" value="1" id="question1-option1" required>
                                            <label class="form-check-label" for="question1-option1">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-1" value="2" id="question1-option2" required>
                                            <label class="form-check-label" for="question1-option2">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-1" value="3" id="question1-option3" required>
                                            <label class="form-check-label" for="question1-option3">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-1" value="4" id="question1-option4" required>
                                            <label class="form-check-label" for="question1-option4">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-1" value="5" id="question1-option5" required>
                                            <label class="form-check-label" for="question1-option5">
                                                5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body mb-2">
                                    <label for=""><b>Question 2:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum molestias consequatur accusamus, nihil soluta sunt optio porro nobis dignissimos aperiam rerum aliquam neque dolores laudantium quia veritatis! Adipisci, eveniet!</label>
                                    <div class="box-evaluation mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-2" value="1" id="question2-option1" required>
                                            <label class="form-check-label" for="question2-option1">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-2" value="2" id="question2-option2" required>
                                            <label class="form-check-label" for="question2-option2">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-2" value="3" id="question2-option3" required>
                                            <label class="form-check-label" for="question2-option3">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-2" value="4" id="question2-option4" required>
                                            <label class="form-check-label" for="question2-option4">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-2" value="5" id="question2-option5" required>
                                            <label class="form-check-label" for="question2-option5">
                                                5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <label for="">remark:</label>
                                        <textarea class="form-control" id="remark-question-2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body mb-2">
                                    <label for=""><b>Question 3:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum molestias consequatur accusamus, nihil soluta sunt optio porro nobis dignissimos aperiam rerum aliquam neque dolores laudantium quia veritatis! Adipisci, eveniet!</label>
                                    <div class="box-evaluation mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-3" value="1" id="question3-option1" required>
                                            <label class="form-check-label" for="question3-option1">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-3" value="2" id="question3-option2" required>
                                            <label class="form-check-label" for="question3-option2">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-3" value="3" id="question3-option3" required>
                                            <label class="form-check-label" for="question3-option3">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-3" value="4" id="question3-option4" required>
                                            <label class="form-check-label" for="question3-option4">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question-3" value="5" id="question3-option5" required>
                                            <label class="form-check-label" for="question3-option5">
                                                5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <label for="">remark:</label>
                                        <textarea class="form-control" id="remark-question-3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-evaluation">
                            <button type="submit" class="btn btn-download mt-3 me-2 " id="buttonSend" style="display: block;">Send evaluation </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/EvaluationForm.js"></script>
</body>

</html>