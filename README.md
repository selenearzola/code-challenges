# Code Challenges

A collection of coding challenges and algorithmic exercises implemented in **PHP**.

This repository is a personal space where I practice problem-solving, explore data structures and algorithms, and improve my ability to write clean, efficient, and maintainable code.

The exercises are inspired by challenges from platforms such as HackerRank and LeetCode, as well as common technical interview problems.

## Challenges

| Challenge | Description | Concepts |
|---|---|---|
| [Smallest Positive Integer](smallest-positive-integer.php) | Find the smallest positive integer missing from an unsorted array. | Arrays, index marking, edge cases |
| [Sliding Window](algorithm-sliding-window.php) | Find the length of the longest substring without repeating characters. | Strings, sliding window, two pointers |
| [Diagonal Difference](diagonal-difference.php) | Calculate the absolute difference between the sums of the two diagonals of a square matrix. | Matrices, iteration, array manipulation |

## Problem-Solving Approach

When working on coding challenges, I focus on:

- **Understanding the problem:** Identifying requirements, constraints, assumptions, and edge cases before implementation.
- **Finding a clear solution:** Starting with a straightforward approach and optimizing when appropriate.
- **Evaluating complexity:** Considering time and space complexity when choosing an algorithm.
- **Testing edge cases:** Checking empty inputs, duplicates, boundary values, and unexpected scenarios.
- **Writing readable code:** Keeping implementations understandable and easy to maintain.

## Running the Challenges

### Requirements

- PHP 8.0 or later
- A terminal or command-line environment

### Clone the repository

```bash
git clone https://github.com/selenearzola/code-challenges.git
cd code-challenges
```

### Execute an exercise

Each challenge is implemented as a standalone PHP script.

For example:

```bash
php smallest-positive-integer.php
```

Or:

```bash
php algorithm-sliding-window.php
```

```bash
php diagonal-difference.php
```

## Example: Smallest Positive Integer

**Problem:** Given an unsorted array of integers, find the smallest positive integer that does not appear in the array.

**Input:**

```php
$input = [3, 4, -1, 1];
```

**Expected output:**

```text
2
```

**Approach:**

The implementation uses array indices to track the presence of positive integers within the relevant range.

Instead of sorting the array, it normalizes out-of-range values and marks existing integers using their corresponding indices.

The first unmarked position identifies the smallest missing positive integer.

**Algorithmic complexity:**

- Time: O(n)
- Auxiliary space: O(1) for the index-marking algorithm, excluding PHP's copy-on-write array duplication.

## About Me

I'm a Software Engineer with 10+ years of experience in backend development, web applications, APIs, and cloud-based systems.

My professional work primarily involves PHP, Laravel, software architecture, integrations, and solving real-world engineering problems.

I use coding challenges to strengthen my algorithmic thinking and continue developing my problem-solving skills beyond day-to-day application development.

**Connect with me:**

- [GitHub](https://github.com/selenearzola)
- [More repositories](https://github.com/selenearzola?tab=repositories)

## Continuous Learning

This repository will continue to evolve as I explore additional challenges involving string manipulation, array operations, searching, optimization, and other algorithmic techniques.

Each exercise is an opportunity to experiment, learn, and improve.

---

*Built with curiosity and a commitment to continuous learning.*
