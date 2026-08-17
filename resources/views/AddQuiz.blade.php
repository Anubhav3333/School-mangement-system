<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Quiz</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <!-- Page Header -->
    <div class="mb-4">
        <h2 class="fw-bold">Add Quiz</h2>
        <p class="text-muted mb-0">
            Create a new quiz and add questions.
        </p>
    </div>


    <form action="#" method="get">

        <!-- Quiz Details -->
        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">Quiz Details</h5>
            </div>

            <div class="card-body">

                <div class="row g-3">

                    <!-- Title -->
                    <div class="col-md-8">

                        <label class="form-label fw-semibold">
                            Quiz Title
                        </label>

                        <input type="text"
                               name="title"
                               class="form-control"
                               placeholder="Enter quiz title">

                    </div>


                    <!-- Duration -->
                    <div class="col-md-4">

                        <label class="form-label fw-semibold">
                            Duration (Minutes)
                        </label>

                        <input type="number"
                               name="duration_minutes"
                               class="form-control"
                               placeholder="30">

                    </div>


                    <!-- Description -->
                    <div class="col-12">

                        <label class="form-label fw-semibold">
                            Description
                        </label>

                        <textarea name="description"
                                  class="form-control"
                                  rows="3"
                                  placeholder="Enter quiz instructions"></textarea>

                    </div>


                    <!-- Marks -->
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Marks Per Question
                        </label>

                        <input type="number"
                               step="0.01"
                               name="marks_per_question"
                               class="form-control"
                               placeholder="1.00">

                    </div>


                    <!-- Negative Marks -->
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Negative Marks
                        </label>

                        <input type="number"
                               step="0.01"
                               name="negative_marks"
                               class="form-control"
                               placeholder="0.25">

                    </div>

                </div>

            </div>

        </div>


        <!-- Questions -->
        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white py-3
                        d-flex justify-content-between align-items-center">

                <h5 class="mb-0 fw-bold">
                    Questions
                </h5>

                <button type="button"
                        class="btn btn-primary btn-sm"
                        onclick="addQuestion()">

                    + Add Question

                </button>

            </div>


            <div class="card-body">

                <div id="questions">


                    <!-- Question 1 -->
                    <div class="question-card border rounded p-3 mb-3">

                        <div class="d-flex justify-content-between
                                    align-items-center mb-3">

                            <h6 class="fw-bold mb-0">
                                Question 1
                            </h6>

                            <button type="button"
                                    class="btn btn-outline-danger btn-sm"
                                    onclick="removeQuestion(this)">

                                Remove

                            </button>

                        </div>


                        <!-- Question Text -->
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Question
                            </label>

                            <textarea
                                name="questions[0][question_text]"
                                class="form-control"
                                rows="2"
                                placeholder="Enter question"></textarea>

                        </div>


                        <!-- Options -->
                        <div class="row g-3">

                            <!-- A -->
                            <div class="col-md-6">

                                <label class="form-label">
                                    Option A
                                </label>

                                <input type="text"
                                       name="questions[0][options][A]"
                                       class="form-control"
                                       placeholder="Enter option A">

                            </div>


                            <!-- B -->
                            <div class="col-md-6">

                                <label class="form-label">
                                    Option B
                                </label>

                                <input type="text"
                                       name="questions[0][options][B]"
                                       class="form-control"
                                       placeholder="Enter option B">

                            </div>


                            <!-- C -->
                            <div class="col-md-6">

                                <label class="form-label">
                                    Option C
                                </label>

                                <input type="text"
                                       name="questions[0][options][C]"
                                       class="form-control"
                                       placeholder="Enter option C">

                            </div>


                            <!-- D -->
                            <div class="col-md-6">

                                <label class="form-label">
                                    Option D
                                </label>

                                <input type="text"
                                       name="questions[0][options][D]"
                                       class="form-control"
                                       placeholder="Enter option D">

                            </div>


                            <!-- Correct Option -->
                            <div class="col-md-6">

                                <label class="form-label fw-semibold">
                                    Correct Option
                                </label>

                                <select
                                    name="questions[0][correct_option]"
                                    class="form-select">

                                    <option value="">
                                        Select Correct Option
                                    </option>

                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>

                                </select>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Buttons -->
        <div class="d-flex justify-content-end gap-2">

            <a href="#"
               class="btn btn-secondary">

                Cancel

            </a>

            <button type="submit"
                    class="btn btn-success">

                Save Quiz

            </button>

        </div>

    </form>

</div>




</body>
</html>