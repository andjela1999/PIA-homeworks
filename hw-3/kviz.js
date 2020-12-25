const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {}
let acceptingAnswers = true
let score = 0
let questionsCounter = 0
let availableQuestions = []

let questions = [{
        question: "Koji je glavni grad Finske?",
        choice1: 'Helsinki',
        choice2: 'Amsterdam',
        choice3: 'Moskva',
        choice4: 'Berlin',
        answer: 1,
    },
    {
        question: "U kom veku je živeo Klod Mone?",
        choice1: '15',
        choice2: '16',
        choice3: '18',
        choice4: '19',
        answer: 4,
    },
    {
        question: "Ko je otkrio penicilin?",
        choice1: 'Nikola Tesla',
        choice2: 'Aleksandar Fleming',
        choice3: 'Alfred Nobel',
        choice4: 'Dmitrij Ivanovič Mendeljejev',
        answer: 2,
    },
    {
        question: "Franc Jozef Hajdn je predstavnik epohe:",
        choice1: 'impresionizma',
        choice2: 'baroka',
        choice3: 'klasicizma',
        choice4: 'renesanse',
        answer: 3,
    },
    {
        question: "Koja je hemijska oznaka za bakar?",
        choice1: 'Bk',
        choice2: 'Br',
        choice3: 'Al',
        choice4: 'Cu',
        answer: 4,
    },

]

const SCORE_POINTS = 1
const MAX_QUESTIONS = 5

startGame = () => {
    questionCounter = 0
    score = 0
    availableQuestions = [...questions]
    getNewQuestion()
}

getNewQuestion = () => {
    if (availableQuestions.length === 0 || questionsCounter > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score)
        return window.location.assign('kraj.html')
    }

    questionsCounter++
    progressText.innerText = `Question ${questionsCounter} of ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionsCounter/MAX_QUESTIONS) * 100}%`

    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions[questionsIndex]
    question.innerText = currentQuestion.question

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion['choice' + number]
    })

    availableQuestions.splice(questionsIndex, 1)

    acceptingAnswers = true
}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if (!acceptingAnswers) return

        acceptingAnswers = false
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number']

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'

        if (classToApply === 'correct') {
            incrementScore(SCORE_POINTS)
        }

        selectedChoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion()
        }, 1000)
    })
})

incrementScore = num => {
    score += num
    scoreText.innerText = score
}
startGame()